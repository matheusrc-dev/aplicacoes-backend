O foco deste curso é o **desenvolvimento de aplicações web**. Estas aplicações podem assumir diversas formas:

- **Sites tradicionais** (conteúdo estático ou dinâmico)
- **Sistemas web** (processamento de dados, autenticação, funcionalidades complexas)
- **APIs** (que servem como base para aplicativos móveis, por exemplo)

## O que é uma aplicação web?

Uma aplicação web é um sistema que roda remotamente em servidores, não na máquina local do usuário. O cliente (usuário) não precisa instalar ou configurar nada: apenas acessa e usa os recursos via navegador.

**Exemplo:** Plataformas de streaming de jogos permitem que computadores menos potentes rodem jogos pesados, pois o processamento é feito remotamente, na nuvem. O cliente apenas envia comandos e recebe o vídeo do jogo rodando, sem a responsabilidade de executar localmente.

Cada vez mais, o modelo de baixar e instalar aplicações no dispositivo está sendo substituído por soluções 100% online.

**Outro exemplo:** O pacote de serviços Google (Docs, Sheets, Slides) é uma aplicação web robusta e amplamente utilizada.

## Diferentes arquiteturas de aplicações web

As aplicações web podem ser construídas de diversas formas, dependendo da escala e da necessidade:

- **Aplicação Monolítica**
    
    Uma única aplicação concentra tudo: renderiza páginas, processa dados no banco de dados e expõe APIs. Estrutura mais simples e fácil de gerenciar em projetos menores.
    
- **Arquitetura de Microsserviços**
    
    Em sistemas maiores, cada serviço (como autenticação, processamento de pagamentos, API de usuários) pode ser isolado em servidores diferentes. Isso melhora a escalabilidade, mas aumenta a complexidade.
    
- **Modelo Serverless**
    
    Não há um servidor rodando continuamente. O código é acionado sob demanda: quando um cliente faz uma requisição, o serviço é inicializado, executado e encerrado automaticamente. Ideal para reduzir custos e aumentar a escalabilidade.
    

## Desafios no desenvolvimento web

Antes de começar a desenvolver, é importante definir:

- Qual arquitetura será usada?
- Como conectar ao banco de dados?
- Como trabalhar com serviços externos (ex.: envio de e-mails)?
- Como executar tarefas pesadas em background?
- Como renderizar páginas visualmente atraentes?
- Como implementar comunicação em tempo real (sockets)?

Construir toda essa infraestrutura **do zero** é extremamente trabalhoso e raro na prática.

## Onde entra o framework?

Ao integrar diversas bibliotecas, classes, estruturas e serviços para facilitar a construção de aplicações, surgem os **frameworks**.

**Frameworks** são conjuntos de ferramentas que reúnem as melhores práticas e soluções mais comuns no desenvolvimento web, proporcionando:

- Agilidade no desenvolvimento
- Estrutura inicial sólida
- Recursos já prontos para uso
- Comunidade ativa para suporte e evolução contínua

Um framework entrega uma base consistente para iniciar a aplicação. Mas, ele não é uma solução mágica: é preciso adaptar  suas funcionalidades conforme o projeto evolui.

**Leitura recomendada:**

[O que é um framework? - balta.io](https://blog.balta.io/o-que-e-um-framework/)

**Links Úteis**

- Explore o tópico "framework" do github: https://github.com/topics/framework
- Página oficial do Laravel: https://laravel.com/
