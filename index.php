<?php
session_start();
require "vendor/autoload.php";
define("INCLUDE_PATH_STATIC","http://localhost/REDE_SOCIAL/SocialMedia/Views/Pages/");
define("INCLUDE_PATH","http://localhost/REDE_SOCIAL/"); #Para criar conta 

$app = new SocialMedia\Aplication;
$app->run();