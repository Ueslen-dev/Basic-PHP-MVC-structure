<?php
namespace Core;

class Controller{
    public function loadView($viewName, $data = array()){
        extract($data);
        require 'View/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $data = array()){
        extract($data);
        require 'View/template.php';
    }
    public function loadViewInTemplate($viewName, $data = array()){
        extract($data);
        require 'View/'.$viewName.'.php';
    }
}