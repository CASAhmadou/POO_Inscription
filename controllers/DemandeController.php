<?php
namespace App\Controller;

use App\Core\Controller;

class DemandeController extends Controller{
    
    public function listerDemande(){
        if($this->request->isGet()){
            $this->render("demande/liste.html.php");
        }
    }

    public function creerDemande(){
        if($this->request->isGet()){
            $this->render("demande/demande.html.php");
        }
    }

    public function traitementDemande(){
        if($this->request->isGet()){
            $this->render("demande/traitement.html.php");
        }
    }
}