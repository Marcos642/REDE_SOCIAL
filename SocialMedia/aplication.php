<?php
namespace SocialMedia;

class Aplication
{
    private $controller;
    private function setApp()
    {
        $loadName = "SocialMedia\Controlles\\";
        $url = explode("/", @$_GET['url']);
        // $url = !empty($_GET['url']) ?? '';
        // $url = explode('/',$url);

        if ($url[0] == '') {
            $loadName .= "Home";
        } else {
            #ucfirst: Deixar a primeira letra da url maiuscula
            #strtolower: Tudo minusculo na url 0
            # Voce esta deixando tudo minusculo, depois deixando so a promeira letra maiuscula
            $loadName .= ucfirst(strtolower($url[0]));
        }
        
        $loadName .= "Controller";
        //invertendo a barra para funcionar em servidores linux
        $load = str_replace('\\', '/', $loadName);

        if (file_exists($loadName . ".php")) {
            $this->controller = new $loadName;
        } else {
            include("Views/Pages/404.php");
            die();
        }

    }
    public function run()
    {
        $this->setApp();
        $this->controller->index();
    }
}