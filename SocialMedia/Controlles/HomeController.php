<?php
namespace SocialMedia\Controlles;

class HomeController
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            // RENDERIZA A HOME DO USUÁRIO
            \SocialMedia\Views\MainView::render('home');
        } else {
            // RENDERIZAR PARA CRIAR CONTA
            \SocialMedia\Views\MainView::render('login');
        }
    }
}