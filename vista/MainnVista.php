<?php



class MainnVista {
    //private $keys;
    private $view;
    
    public function __construct() {
        $this->view = file_get_contents(__DIR__ . "/mainn.html");
    }
    
    function getView() {
        return $this->view;
    }
}
