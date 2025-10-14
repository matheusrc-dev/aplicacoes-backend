<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# BF Social Care
Esta aplicação, inspirada no projeto [Open Social Care](https://github.com/open-social-care), é um objeto de estido da disciplina "Desenvolvimento de Aplicações Backend com Framework"da modalidade EAD.

## Execução do projeto
Para executar esteja projeto, siga estes passos:

1. Certifique-se de que o laravel está instalado no seu computador. Siga o guia oficial: https://laravel.com/docs/12.x#installing-php. Execute no seu terminal:

    ```bash
    composer --version
    php --version
    node --version
    ```
2. Execute a instalação das dependências do nodejs:
    ```bash
    npm install && npm run build
    ```
3. Execute o projeto: 
    ```bash
    composer run dev
    ```
## Estrutura do projeto
- `/` (landing page)
- `/admin/subjetcs` (listagem de sujeitos)
- `/admin/subjects/create` (criação de um novo sujeito)
- `/admin/subjects/{id}` (visualização do sujeito e listagem dos seus atendimentos)
- `/admin/subjects/{id}/edit` (edição do sujeito)
