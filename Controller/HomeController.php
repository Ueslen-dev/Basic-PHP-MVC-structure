<?php

namespace Controller;

use \Core\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        
    }
    public function index()
    {
        //Informações que serão enviadas pra View
        //Information that will be sent to View
        $data = array();
        $data['msg'] = 'Hello World!';
        //Metódo responsável por carregar a View dentro do template e eviar os dados
        //Method responsible for loading the View into the template and avoiding data
        $this->loadTemplate('Home', $data);
    }

}
