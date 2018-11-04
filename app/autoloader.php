<?php

namespace App;

class Autoloader{

    private $controller;

    public function __construct()
    {
        $controller = $this->controller;
    }

    static function autoloader($controller)
    {
        require './controller/'.$controller.'.php';
    }

    static function register()
    {
        spl_autoload_register([
            __CLASS__, 'autoload'
        ]);
    }

}