# Portfólio para Vaga de Desenvolvedor FullStack

Este sistema foi criado com o intuito de mostrar meus conhecimentos técnicos sobre desenvolvimento FullStack em PHP e estruturas de programação Web. Trabalhei com o Laravel 8 neste projeto, usando alguns pacotes para complementá-lo.

- [Spatie Permission](https://github.com/spatie/laravel-permission).
- [Activity Log](https://github.com/spatie/laravel-activitylog).
- [Laravel UI](https://github.com/laravel/ui).
- [Faker PHP](https://github.com/FakerPHP/Faker).
- [Validator Docs](https://github.com/geekcom/validator-docs).

Para o front-end, estamos baseando a maior parte do projeto no modelo AdminLTE 3, que pode ser encontrado em [Template](https://adminlte.io/themes/v3/index.html).

- [AdminLTE 3](https://github.com/ColorlibHQ/AdminLTE).

## Sobre este projeto

- Desenvolvedor: João Pedro Lopes
- Status: `Em desenvolvimento`

### Requisitos
- PHP >= 7.3
- Laravel = 8
- Composer v1.10.3
- Mysql v7.4.11

### Como instalar
- Clone o projeto
    ```bash
        git clone https://github.com/joaopalopes24/portfolio-api.git
    ```

- Mude para a pasta do repositório
    ```bash
        cd portfolio-api
    ```

- Instale as dependências usando o `composer`
    ```bash
        composer install
    ```

- Copie o arquivo .env.example
    - Se estiver utilizando linux: `cp .env.example .env` 
    - Se estiver no windows abra o arquivo em um editor de código e o salve novamente como `.env`
    
    
- Crie uma nova chave para a aplicação
    ```bash
        php artisan key:generate
    ```
- Primeiro crie o Banco de Dados e depois atualize as configuração do banco de dados (as configurações já estão iguais a mostrada a seguir)
    - .env
     ```php
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=portfolio
        DB_USERNAME=portfolio
        DB_PASSWORD=123456
    ``` 

- Rode as Migrations com os Seeders
    ```bash
        php artisan migrate --seed
    ```

- Rode o comando para criar o link simbólico de arquivos:
    ```bash
        php artisan storage:link
    ```

- Rode o sistema usando o comando:
    ```bash
        php artisan serve
    ```

- Acesse a aplicação pela URL [Portfolio-API](http://127.0.0.1:8000).

### Dados para Login
- Usuário: `administrador@exemplo.com`.
- Senha: `12345678` .

## OBS
- Ao colocar em produção, retirar o readme.md e os arquivos de referencia para não subir para o sistema em produção

## Possíveis Issues

### 1. Erro ao recuperar a senha.

Este problema ocorre devido ao fato do google sempre desativar o acesso a apps inseguros. Para corrigir isso segue o passo a passo: 

- Entre no arquivo `config > mail.php`
- Pegue a senha e o e-mail nos indices `username` e `password`;
    ```php
        'username' => env('MAIL_USERNAME', 'email_aqui'),

        'password' => env('MAIL_PASSWORD', 'senha_aqui'),

    ```
- Faça login na conta do google do e-mail de redefinição de senha.
- Vá em **Gerenciar sua Conta do Google**
- Clique na aba **Segurança**
- Depois ative o **Acesso a app menos seguro**.

**Pronto, problema resolvido!**
