# Aula 05 | Views com Blade

## Mecanismos de renderização de páginas server side do Laravel

O Laravel é um framework bastante flexível. Você pode construir seu front-end usando diversas tecnologias, como Blade (nativo), React, Vue.js ou qualquer outra. Ele permite criar o front-end utilizando várias abordagens.

Aqui focaremos no template **Blade**, que é a tecnologia padrão do Laravel e não depende de instalação de pacotes adicionais.

Criamos um fake CRUD de sujeitos (subjects) usando Blade, com extensão `.blade.php`.

Os arquivos Blade são HTML normais, mas podem conter diretivas PHP no meio. Essas diretivas são processadas **no servidor** antes de entregar a página para o cliente (server side rendering). Se observarmos o código fonte no navegador (F12), vemos apenas o HTML final, sem PHP.

## Recursos do Blade

### Views compartilhadas

Às vezes, temos elementos que se repetem em todas as páginas, como `<head>`, headers, e componentes comuns.

Criamos uma pasta `views/shared` e, nela, um `head.blade.php`:

```html
<head>
    <title>BG Social Care</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
```

Para usar esta view, aplicamos a diretiva `@include('shared.head')`.

Exemplo no `welcome.blade.php`:

```php
<!DOCTYPE html>
<html>
    @include('shared.head')
    <body>
        <h1>BF Social Care</h1>
    </body>
</html>
```

Verificando o HTML renderizado no navegador, vemos o `head` inserido corretamente.

![print](https://img.notionusercontent.com/s3/prod-files-secure%2Faae7f50f-a158-4d3a-84a6-a930f6e9fe07%2Fbe3b5e8c-466c-4074-b37c-b1753f1fca24%2Fimage.png/size/w=2000?exp=1745794063&sig=jfmVxDjuTpal5XaKV3U66DN9VEn5CthijT7U0RAEQMw&id=1e2b42ee-8036-8001-9882-cfd98a0730eb&table=block&userId=df8eebcb-0a89-4552-827b-3c0a40085861)

### Layouts e @yield

Criamos um **layout** para manter conteúdos em comum e apenas variar o conteúdo das páginas.

```php
// resources/views/layouts/admin.blade.php
<!DOCTYPE html>
<html>
    @include('shared.head')
    <body>
        <h1>@yield('title')</h1>
        @yield('content')
    </body>
</html>
```

Utilizamos `@yield('title')` e `@yield('content')` para definir "espaços" a serem preenchidos pelas views que estendem esse layout.

### Estendendo Layouts

No `welcome.blade.php` passamos a estender o layout, preenchendo a seção `content`:

```php
// resources/views/welcome.blade.php
@extends('layouts.public')

@section('content')
    <h1>BF Social Care</h1>
@endsection
```

### Exemplo prático com listagem de atendimentos

O componente `index.blade.php` dos atendimentos:

```php
@extends('layouts.admin')

@section('title')
    Listagem de Atendimentos
@endsection

@section('content')
    <a href="{{ route('admin.appointments.create') }}">Novo Atendimento</a>

    <ul>
        @forelse ($appointments as $appointment)
            <li>
                <a href="{{ route('admin.appointments.detail', ['id' => $appointment['id']]) }}">
                    {{ $appointment['date'] }} - {{ $appointment['description'] }}
                </a>
            </li>
        @empty
            <p>(sem registros)</p>
        @endforelse
    </ul>
@endsection
```

### Componentes: Flash Message

Querendo exibir mensagens (ex: "salvo com sucesso") em todas as páginas, criamos um componente.

Comando:

```bash
php artisan make:component Flash
```

Isso cria dois arquivos:

- `app/View/Components/Flash.php`
- `resources/views/components/flash.blade.php`

O arquivo Blade exibirá a mensagem de Flash (sessão) e o PHP define a lógica do componente.
