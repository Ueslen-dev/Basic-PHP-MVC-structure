## Sobre a estrutura
## About the structure
Estrutura MVC básica para aplicações pequenas e para iniciantes nesse modelo de estrutura
Basic MVC framework for small applications and for beginners in this framework model

## Importante
## Important
A estrutura não possui ORM, todo o processo de montagem das querys é feito com PDO.
Lembre-se de modificar o caminho da aplicação no arquivo .htaccess
The structure has no ORM, the entire process of assembling the queries is done with PDO.
Remember to modify the application path in the .htaccess file

## Como usar?
## How to use?


## Estrutura de pastas
## Folder structure
**[assets] {
    Ativos utilizados para construção da aplicação (JS, CSS, IMG etc...)
    Assets used to build the application (JS, CSS, IMG etc ...)
}
**[Model] {
    Arquivos de persistência com o banco de dados
    Persistence files with the database
}
**[View] {
    Arquivos HTML
    Files HTML
}
**[Controller] {
    Controladores da aplicação
    Application drivers
}
**[Core] {
    Estrutura de funcionamento da aplicação
    Application working structure
}
**[Routes] {
    Gerenciamento de rotas da aplicação 
    Application route management
}

## Estrutura de arquivos
## File structure
**[config.php] {
    Configuração de banco de dados
    Database configuration
}
**[environment.php] {
    Configuração do ambiente da aplicação
    Setting up the application environment
}
**[index.php] {
    Um dos arquivos principais da estrutura, responsável por requisitar dependências importantes para o funcionamento da aplicação.
    One of the main files of the structure, responsible for requesting important dependencies for the operation of the application.
}

