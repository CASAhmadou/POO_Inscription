<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\ClasseProfesseur;
use App\Model\Professeur;

class ProfesseurController extends Controller
{

    public function affecterClasse()
    {
        if ($this->request->isGet()) {
            $this->render("professeur/classes-professeur.html.php");
        }
        if ($this->request->isPost()) {
            $this->render("professeur/liste.html.php");
        }
    }

    public function listerProfesseur()
    {
        if ($this->request->isGet()) {
            $this->render("professeur/liste.html.php");
        }
    }

    public function creerProfesseur()
    {
        if ($this->request->isGet()) {
            //dd($_POST);
            $this->render("professeur/add.html.php");
        }

        if ($this->request->isPost()) {
            $prof = new Professeur();
            $prof->setNomComplet($_POST["nomComplet"]);
            $prof->setGrade($_POST["grade"]);
            //$prof->setClasses($_POST["classe"]);
            $id_prof = $prof->insert();
            
            $clprof = new ClasseProfesseur();
            foreach ($_POST["classe"] as $value) {
                $clprof->setClasse($value);
                $clprof->setProfesseur($id_prof);
                $clprof->insert();
            }
            // $clprof = new ModuleProfesseur();
            // foreach ($_POST["classe"] as $value) {
            //     $clprof->setClasse($value);
            //     $clprof->setProfesseur($id_prof);
            //     $clprof->insert();
            // }
            $this->render("professeur/liste.html.php");
        }
    }
}
