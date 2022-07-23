<?php

use controllers\TodoController;

class Route{
    public $routes = [
        "GET" => [
            //"" => "TodoControllers@home"
        ],
        "POST" => []
    ];
    public function register($route){
        $this->routes = $route;
    }
    
    public static function load($filename) {
        $route = new Route;
        require $filename;
        return $route;
    }
    public function get($uri,$controller){
        $this->routes["GET"][$uri] = $controller;
    }
    public function post($uri,$controller){
        $this->routes["POST"][$uri] = $controller;
    }
    public function direct($uri,$method){
        if(!array_key_exists($uri,$this->routes[$method])){
        die("404page");
        }
        $explosin = $this->routes[$method][$uri];
            $this->callMethod($explosin[0],$explosin[1]);
    }

    public function callMethod($class,$method){
        $class = new $class;
        $class->$method();
    }

}
$route = new Route;
