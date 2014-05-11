<?php

class ContactsController
{
    public function indexAction()
    {
        return new View('contacts', array(
            'title' => 'Contactos',
            'firstDescription' => 'Escribeme una e-mail:',
            'fullName' => 'tu nombre',
            'subject' => 'asunto',
            'message' => 'tu mensaje',
            'send' => 'Envia',
            'statusMessage' => 'El mensaje no ha sido enviado porque el programador no tuvo tiempo, hoy es sabado y se va a bailar!'
        ));
    }

    public function cityAction($city)
    {
        exit("Contacs $city");
    }
}