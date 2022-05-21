<?php
namespace App\Controller;
use App\Core\Controller;

class ClasseController extends Controller{

    public function listerClasse(){
        if($this->request->isGet()){
            $this->render("classe/liste-classe.html.php");
        }
    }

    public function creerClasse(){
        echo ('Creer moi');
    }
}