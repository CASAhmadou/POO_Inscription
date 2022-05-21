<?php
namespace App\Controller;

use App\Core\Controller;

class ProfesseurController extends Controller{

    public function affecterClasse(){
        
    }

    public function listerProfesseur(){
        if($this->request->isGet()){
            $this->render("professeur/liste-professeur.html.php");
        }
    }

    public function creerProfesseur(){
        if($this->request->isGet()){
            //dd($_POST);
            $this->render("professeur/add-professeur.html.php");
        }
    }
}