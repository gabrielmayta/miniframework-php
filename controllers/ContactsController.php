<?php

class ContactsController
{
    public function indexAction()
    {
        return new View('contacts', ['title' => 'Contacts']);
    }

    public function cityAction($city)
    {
        exit("Contacs $city");
    }
}