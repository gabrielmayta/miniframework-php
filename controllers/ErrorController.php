<?php

class ErrorController
{
    public function indexAction()
    {
        return new View('error', array(
            'title' => 'Page not found',
            'firstDescription' => '{404} <br/> La pagina no existe!'
        ));
    }
}
