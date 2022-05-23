<?php
namespace App\Controller;

use App\Core\Controller;

class EtudiantController extends Controller{
    
    public function createEtudiant(){
        $this->render("inscription/formulaire.html.php");
    }

    public function ListerEtudiant(){
        if($this->request->isGet()){
            $this->render("etudiant/liste-etudiant.html.php");
        }
    }
}
