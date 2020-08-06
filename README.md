## About the structure
Basic MVC framework for small applications and for beginners in this framework model

## Important
The structure has no ORM, the entire process of assembling the queries is done with PDO.
Remember to modify the application path in the .htaccess file

## How to use?
Keep the composer installed in your project, then clone the repository for your project:<br/><br/>
$ git clone https://github.com/Ueslen-dev/Basic-PHP-MVC-structure.git<br/><br/>
After cloning the repository, run the following command on the terminal:<br/><br/>
$ composer update

## Folder structure
<strong>assets:</strong><br/>
    Assets used to build the application (JS, CSS, IMG etc ...)

<strong>Model:</strong><br/>
    Persistence files with the database

<strong>View</strong><br/>
    Files HTML

<strong>Controller</strong><br/>
    Application drivers

<strong>Core</strong><br/>
    Application working structure

<strong>Routes</strong><br/>
    Application route management

## File structure
<strong>config.php</strong><br/>
    Database configuration

<strong>environment.php</strong><br/>
    Setting up the application environment

<strong>index.php</strong><br/>
    One of the main files of the structure, responsible for requesting important dependencies for the operation of the application.
    
## PHP Standards Recommendations (PSR)
- **[PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)**
- **[PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/)**
- **[PSR-12: Extended coding style](https://www.php-fig.org/psr/psr-12/)**


