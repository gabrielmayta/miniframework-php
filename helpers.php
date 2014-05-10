<?php

function view($template, $vars = array())
{
    extract($vars);

    require "views/$template.tpl.php";
}

function FrontEndController($name)
{
    if (empty($name))
        $name = "home";

    $file = "controllers/$name.php";

    if (file_exists($file))
        return require $file;

    else {
        header("HTTP/1.0 404 Page Not Found");
        exit("Pagina no econtrada");
    }
}