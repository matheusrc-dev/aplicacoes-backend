O Laravel é um bom framework para produção, é muito estável, não quebra de uma versão para outra com facilidade. Você consegue tocar uma aplicação de grande porte sem correr o risco do projeto ficar desatualizado e refazer tudo do zero. 

Ele é um pacote completo, tem suporte a diferentes tipos de bancos de dados, servidores de email, diferentes tipos de front-end, é possível por exemplo se eu quero utilizar vue ou react é muito fácil. E existem outros frameworks que não tem isso incorporado no seu core.

No Laravel existe muita coisa pronta e já tem várias coisas nativas, e não tem chances de quebrar de uma versão para outra, sem necessidade de inserir tecnologias de terceiros. Ecossistemas que precisam importar mutias coisas de outros lugares tem chance maior de quebrar (JavaScript), caso o frameorks seja muito minimalista é muito fácil encher de bibliotecas e aquilo ficar rapidamente defasado.

Quando você atualiza o framework você precisa lembrar de atualizar as bibliotecas que você importou de fora.

### Compreendendo a estrutura do Laravel

O framework vem com uma quantidade considerável de arquivos e pastas, mas sua organização é bastante intuitiva. A estrutura foi pensada para escalar com o crescimento do projeto, então mesmo que hoje pareça enxuta, ela comporta bem projetos grandes.

Site da documentação do Laravel: https://laravel.com/docs/12.x/structure. É uma documentação bem feita e muito atualizada.

É importante ler a documentação de qualquer tecnologia, leia a documentação!!! Tenha uma noção do que a tecnologia é capaz de fazer e tire suas próprias conclusões antes de ver algum curso ou  opinião de terceiros.

### Projeto de exemplo: Mini Open Social Care

Vamos iniciar construindo uma versão mini do Open Social Care, esse é um sistema voltado para assistentes sociais registrarem atendimentos. A versão completa pode ser acessada no github do professor, nesse repositório: https://github.com/andresjesse/sd-mvp-social-care. Acredito que seja o certo kkkkk.

Para criar o projeto execute o seguinte comando:

```jsx
laravel new open-social-care
```

- Escolha a opção none
- Para o banco de dados escolha a opção SQLite

---

Explorando um projeto Laravel vemos que ele já traz muita coisa pré configurada, para mais detalhes ler a seção da documentação que fala sobre a estrutura de diretórios: https://laravel.com/docs/12.x/structure.

A estrutura padrão do Laravel inclui arquivos relacionados ao Node.js, Tailwind CSS e Vite como *bundler*, além do Composer (gerenciador de dependências do PHP) e o arquivo `.env` para variáveis de ambiente.

### Variáveis de Ambiente

As variáveis de ambiente armazenam informações sensíveis e específicas de cada ambiente (desenvolvimento, produção etc). O arquivo `.env.example` serve como modelo e não contém dados sensíveis — por isso pode ser enviado para o Git. Sempre que clonar um projeto Laravel, crie uma cópia do `.env.example` e renomeie para `.env`, ajustando os valores conforme o ambiente.

### Estrutura de diretórios

A pasta **app** é onde vão ficar todas as classes e arquivos .php, a maioria delas pelo menos, mas referente a sua aplicação é aqui onde será o centro do seu código. No início essa pasta possui poucas coisas, mas conforme o projeto vai crescendo essa pasta também vai aumentando de tamanho. Do Laravel 10 para trás ele já trazia muitas pastas porém no Laravel 11 isso foi removido deixando uma versão mais enxuta.

### Entendendo o Padrão MVC no Laravel

O **Laravel** é um framework PHP que segue o padrão de arquitetura **MVC** (*Model-View-Controller*). Ele já fornece uma estrutura organizada e diversas funcionalidades pré-configuradas com base nesse padrão, o que facilita bastante o desenvolvimento. Diferente do **Express** no Node.js, que oferece mais liberdade para organizar o projeto como quiser, o Laravel propõe uma convenção de estrutura e boas práticas desde o início. Por isso, é altamente recomendado seguir essas convenções — só faça alterações significativas se houver uma real necessidade.

### Estrutura MVC no Laravel

- **Controllers**
    
    A pasta `app/Http/Controllers` armazena os controladores da aplicação. É lá que criamos as classes responsáveis por processar as requisições, aplicar a lógica de negócio e retornar as respostas adequadas. O Laravel já fornece uma classe base (`Controller.php`) que podemos estender para criar nossos próprios controllers.
    
- **Models**
    
    Os *models* são representações das tabelas do banco de dados. Eles ficam localizados na pasta `app/Models`. Cada model é uma classe que estende `Illuminate\Database\Eloquent\Model`, o que permite usar os recursos do Eloquent ORM (Object-Relational Mapping) para interagir com o banco de forma orientada a objetos. Por exemplo, podemos criar, ler, atualizar e excluir registros diretamente usando métodos do model, sem precisar escrever SQL manualmente.
    
- **Views**
    
    Embora não exista uma pasta `views/` diretamente na raiz do projeto, os arquivos de visualização ficam dentro da pasta `resources/views`. O Laravel utiliza o motor de templates **Blade** para renderizar as *views*, o que facilita a criação de interfaces dinâmicas e reutilizáveis. Assim, mesmo que a pasta não se chame literalmente `views/`, a parte visual da aplicação está bem definida e organizada dentro do padrão MVC.
    

### Outras pastas importantes do Laravel

- **`config/`**: Essa pasta contém os arquivos de configuração da aplicação. Em geral, você não precisa alterá-los com frequência — a maioria das personalizações pode ser feita diretamente pelas variáveis de ambiente no `.env`. Só edite os arquivos aqui quando for realmente necessário.
- **`database/`**: Como usamos SQLite, um arquivo `database.sqlite` será criado aqui. Esse diretório também abriga as *migrations* (estrutura do banco), *factories* (geração de dados fake para testes) e *seeders* (dados iniciais da aplicação, como listas de cidades, por exemplo).
- **`public/`**: Contém arquivos acessíveis diretamente via URL, como imagens públicas, favicon (`favicon.ico`), e o `index.php` que serve como ponto de entrada para a aplicação. Também é onde ficam os arquivos compilados do front-end.
- **`routes/`**: Armazena os arquivos de rotas. Você pode definir rotas para a web (`web.php`), para APIs (`api.php`) ou até mesmo para comandos do Artisan (`console.php`). Para mais detalhes sobre o Artisan, consulte: [https://laravel.com/docs/12.x/artisan](https://laravel.com/docs/12.x/artisan#main-content).
- **`storage/`**: Utilizada para armazenar arquivos e logs da aplicação. É aqui que ficam os arquivos de log (úteis para debugging), arquivos privados (não acessíveis por URL) e arquivos públicos (como avatares). Em aplicações maiores, esse diretório pode estar em um servidor separado dedicado ao armazenamento.
- **`tests/`**: Contém os testes da aplicação: unitários, de integração, de funcionalidades, entre outros. O Laravel já traz uma estrutura básica de testes pronta para uso.
- **`vendor/`**: Essa pasta é gerada automaticamente pelo Composer e armazena todas as dependências externas da aplicação. **Você nunca deve editar arquivos aqui manualmente.** Tudo o que está em `vendor/` é de terceiros.