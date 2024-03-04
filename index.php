<?php
session_start();
require "vendor/autoload.php";
define("INCLUDE_PATH_STATIC","http://localhost/REDE_SOCIAL/SocialMedia/Views/Pages/");
$app = new SocialMedia\Aplication;
$app->run();