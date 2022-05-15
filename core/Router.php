<?php
namespace App\Core;

use App\Exception\RouteNotFoundException;

class Router{
    private Request $request;
    private array $routes=[];

    public function __construct()
    {
        $this->request=new Request;
    }

    public function route(string $uri, array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){
        $uri="/".$this->request->getUri()[0];
        if(isset($this->routes[$uri])){
            $route=$this->routes[$uri];
            [$ctrClass,$action]=$route;
            if (class_exists($ctrClass)) {
                dd("classe existe");
            }else{
                throw new RouteNotFoundException();
            }
        }else {
            throw new RouteNotFoundException();
        }
    }
}