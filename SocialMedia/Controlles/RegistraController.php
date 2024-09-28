<?php
namespace SocialMedia\Controlles;

class HomeController
{
    public function index()
    {
            \SocialMedia\Views\MainView::render('registrar');
    }
}