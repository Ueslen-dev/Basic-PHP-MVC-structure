<?php
require 'environment.php';
$config = array();
if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://urlTheApplication");
    $config['dbname'] = "NameDataBase";
    $config['dbhost'] = "localhost";
    $config['dbuser'] = "UserDataBase";
    $config['dbpass'] = "PassDataBase";
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host".$config['dbhost'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

