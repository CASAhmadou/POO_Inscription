<?php
namespace App\Controller;

use App\Core\Controller;

class EtudiantController extends Controller{
    
    public function createEtudiant(){

    }

    public function ListerEtudiant(){
        if($this->request->isGet()){
            $this->render("etudiant/liste-etudiant.html.php");
        }
    }
}