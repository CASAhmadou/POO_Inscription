<?php
namespace App\Controller;

use App\Core\Constantes;
use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller{

    public function listerClasse(){
        if($this->request->isGet()){
            $this->render("classe/liste.html.php");
        }
    }

    public function creerClasse(){
        if($this->request->isGet()){
            $this->render("classe/add.html.php",
            ["action"=>Constantes::WEB_ROOT."add-classe"]);
            
        }

        if($this->request->isPost()){
            extract($_POST);
            $cl= new Classe();
            $cl->setLibelle($libelle);
            $cl->setNiveau($niveau);
            $cl->setFilliere($filliere);
            $cl->insert();
            $this->render("classe/liste.html.php");
            
        }
    }

    public function editClasse(){
        if($this->request->isGet()){
            $id=$this->request->getUri()[1];   
            $keycl= Classe::findById($id);
           //dd($keycl);
            //$data=["keycl"=>$keycl];
            $this->render("classe/add.html.php",
            ["classe"=>$keycl,
            "action"=>Constantes::WEB_ROOT."edit-classe/".$keycl->id]);

        }
        if($this->request->isPost()){
            $edit=$this->request->getUri()[1];
            $cl= new Classe() ;
            extract($_POST);
            $cl->setId($edit);
            $cl->setLibelle($libelle);
            $cl->setNiveau($niveau);
            $cl->setFilliere($filliere);
            $cl->update();
            $this->render("classe/liste.html.php");
        }
    }
    
    public function deleteClasse(){
        if($this->request->isGet()){
            $this->render("classe/liste.html.php");
        }

        if($this->request->isPost()){
            $idSup=(int) $_POST['id'];
            $result = Classe::delete($idSup);
            if($result>0){
                $this->render("classe/liste.html.php");
                echo ('Suppression reussie');
            }else{
                $this->render("classe/liste.html.php");
            }
        }
    }
}