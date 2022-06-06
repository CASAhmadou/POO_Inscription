<?php
namespace App\Core;

use App\Controller\SecurityController;
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
        $params = $this->request->getUri();
        session_start();
        unset($params[0]);
        $params=count($params)>= 1 ? array_values($params) : [];

        if(isset($this->routes[$uri]) && isset($_SESSION["user"])){
            $route=$this->routes[$uri];
            [$ctrClass,$action]=$route;
            //if(isset($_SESSION)){
            if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {
                //dd("classe existe");
                $ctrl=new $ctrClass($this->request);

                call_user_func_array([$ctrl,$action],$params);
                //$ctrl->$action();
                //Autre Methode
            }else{
                throw new RouteNotFoundException();
            }
        }else {
            if($this->request->getUri()[0] ==""){
                $var= new SecurityController($this->request);
                call_user_func(array($var,'authentification'));
            }else{
                throw new RouteNotFoundException();

            }
                
        }
    //}
    }
}