<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
session_start();
require 'config.php';
require 'vendor/autoload.php';
require 'Routes/web.php';

$core = new Core\Core();
$core->run();

