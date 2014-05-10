<?php

class HomeController
{
    public function IndexAction()
    {
        return new View('home', ['title' => 'MejorandoPHP', 'language' => 'PHP']);
    }
}