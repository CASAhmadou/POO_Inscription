<?php
namespace App\Controller;

use App\Core\Controller;

class DemandeController extends Controller{
    
    public function listerDemande(){
        if($this->request->isGet()){
            $this->render("demande/liste-demande.html.php");
        }
    }

    public function creerDemande(){

    }
}