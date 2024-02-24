<?php
session_start();
require "vendor/autoload.php";
$app = new SocialMedia\Aplication;
$app->run();