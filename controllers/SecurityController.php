<?php
namespace App\Controller;
use App\Core\Controller;

class SecurityController extends Controller{
    
    public function authentification(){
        //Affichage du formulaire de connexion => GET
        if($this->request->isGet()){
            $this->render("security/login.html.php");
        }
        //Traitement apres soumission => POST

    }

    public function deconnexion(){
        $this->redirectToRoot("login");
    }
}