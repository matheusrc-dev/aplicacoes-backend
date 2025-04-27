# Aula 04 | Roteamento e Ciclo de Vida de uma Request

## Como funciona o ciclo de vida de uma requisição?

Desde o momento em que o usuário faz a requisição no browser, a requisição passa por diversas etapas até que uma resposta seja retornada ao usuário.

---

## Rotas que serão desenvolvidas:

- `/` (landing page)
- `/admin/subjects` (listagem de sujeitos)
- `/admin/subjects/create` (criação de um novo sujeito)
- `/admin/subjects/{id}` (visualização do sujeito e listagem dos seus atendimentos)
- `/admin/subjects/{id}/edit` (edição do sujeito)

---

## Primeira rota: Landing Page

Na primeira página (`/`), já temos uma rota criada no arquivo `routes/web.php`, retornando diretamente uma view localizada em `resources/views/welcome.blade.php`.

Como não vamos trabalhar com estilização agora, deixamos o arquivo bem limpo, apenas com um título:

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <h1>BF Social Care</h1>
    </body>
</html>
```

![image.png](https://img.notionusercontent.com/s3/prod-files-secure%2Faae7f50f-a158-4d3a-84a6-a930f6e9fe07%2F68255e6b-fb17-4e8e-aaf3-b591384344f7%2Fimage.png/size/w=2000?exp=1745776983&sig=CbkGLqfIib_eGC7JSdjypWmrNTTW7oYev31kozdsspg&id=1e2b42ee-8036-80bc-9c1c-d4794d0db920&table=block&userId=df8eebcb-0a89-4552-827b-3c0a40085861)

---

## Sobre organizar o projeto

Retornar uma view direta dentro da rota é aceitável para exemplos rápidos, mas **não** é o padrão adequado para projetos mais complexos.  
**Não devemos montar lógica dentro do arquivo de rotas.**

O **Router** é apenas o ponto de entrada. Ele recebe a requisição e decide para onde ela deve ser enviada.  
Depois disso, o **Controller** assume a responsabilidade de processar a requisição.

---

## Agrupando rotas administrativas

Como temos um prefixo `/admin` para tudo que é do painel administrativo, podemos criar um grupo de rotas:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/subjects', function () {
        return view('welcome');
    });
});
```

---

## Criando um Controller

Porém, queremos utilizar controllers corretamente para implementar o **MVC**.  
Vamos criar o controller com o comando:

```bash
php artisan make:controller Admin/SubjectsController
```

Esse comando vai gerar o arquivo `SubjectsController.php` no caminho:

```
app/Http/Controllers/Admin/SubjectsController.php
```

Conteúdo inicial do arquivo gerado:

```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    //
}
```

---

## Chamando o Controller nas rotas

Agora vamos alterar a rota `/admin/subjects` para utilizar o `SubjectsController`:

```php
<?php

use App\Http\Controllers\Admin\SubjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/subjects', [SubjectsController::class, 'index']);
});
```

> **Observação:** Estamos vinculando a rota ao método `index` do `SubjectsController`.

---

## Trabalhando com Blade

Os arquivos Blade (`.blade.php`) nada mais são do que páginas HTML, onde podemos interpolar PHP de maneira fácil usando diretivas como `{{ }}`.

---

## Formulário: duas rotas

Todo formulário normalmente terá:

- Uma rota para **desenhar** o formulário (`GET`)
- Uma rota para **receber** os dados do formulário (`POST`)

---

## Proteção CSRF

Dentro dos formulários, utilizamos a diretiva `@csrf` para proteção contra ataques CSRF (Cross-Site Request Forgery).  
Isso impede que uma requisição maliciosa tente forjar uma ação utilizando a sessão de um usuário legítimo.

---

## Exibindo Flash Messages

Podemos utilizar **flash messages** para exibir mensagens rápidas entre uma requisição e outra (por exemplo, informando sucesso ou erro ao enviar um formulário):

```php
<h1>Edição de um Sujeito</h1>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('admin.subjects.update', ['id' => $subject['id']]) }}" method="POST">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $subject['name'] }}">
    <button type="submit">Salvar</button>
</form>
```

**Explicação:**

- `session('success')`: Se existir uma mensagem de sucesso na sessão, ela será exibida.
- `session('error')`: Se existir uma mensagem de erro na sessão, ela será exibida.
- A diretiva `@csrf` adiciona um token de segurança ao formulário.
