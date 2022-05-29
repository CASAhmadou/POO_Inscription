<?php
namespace App\Controller;
use App\Core\Model;
use App\Model\User;
use App\Core\Controller;

class SecurityController extends Controller{
    
    public function authentification(){
        //Affichage du formulaire de connexion => GET
        if($this->request->isGet()){
            $this->render("security/login.html.php");
        }
        //Traitement apres soumission => POST
        if($this->request->isPost()){
          $userConnect=User::findUserByLoginAndPassword($_POST["login"],$_POST["password"]);
          //dd($userConnect);
          if($userConnect!=NULL){
              $this->session->addsession("user",$userConnect);
              $Role=$this->session->getsession("user")->role;
              $_SESSION["role"] = $Role;
                $this->render("user/accueil.html.php");
              }else{
                $this->render("security/login.html.php");
          }
            
        }
    }

    public function deconnexion(){
      session_unset();
        $this->redirectToRoot("");
    }
}