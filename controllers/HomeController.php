<?php

class HomeController
{
    public function IndexAction()
    {
        return new View('home', [
            'title' => 'Home',
            'firstDescription' => 'Bienvenido al curso de Laravel {PHP}',
            'secondDescription' => 'Aprendiendo un buen PHP con Mejorando.la'
        ]);
    }
}