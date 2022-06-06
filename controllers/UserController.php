<?php
namespace App\Controller;

use App\Core\Controller;

class UserController extends Controller{
    
    public function accueil(){
        if($this->request->isGet()){
            $this->render("user/accueil.html.php");
        }
    }
}