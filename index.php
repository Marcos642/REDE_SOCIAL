<?php
session_start();
require "vendor/autoload.php";
define("INCLUDE_PATH_STATIC","http://localhost/REDE_SOCIAL/SocialMedia/Views/Pages/");// Definir qual diretorio vai incluir os arquivos estáticos
define("INCLUDE_PATH","http://localhost/REDE_SOCIAL/"); #Para criar conta (PARA REDIRECIONAMENTO COM LINK)

$app = new SocialMedia\Aplication;
$app->run();