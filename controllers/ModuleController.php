<?php
namespace App\Controller;
use App\Core\Controller;

class ModuleController extends Controller{

    public function ajouterModule(){
        
    }

    public function listerModule(){
        if($this->request->isGet()){
            $this->render("module/liste-module.html.php");
        }
    }
    
}