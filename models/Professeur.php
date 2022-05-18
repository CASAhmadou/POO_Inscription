<?php
namespace App\Model;
use App\Core\Constantes;

class Professeur extends Personne{
    private string $grade;

    public function __construct()
    {
        parent::$role=Constantes::ROLE_PROFESSEUR;
    }

    //ManyToMany avec Classe
    public function classes():array{
        return [];
    }
   
    //Redefinition
    public static function findAll():array{      
        $sql="select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[parent::$role]);
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`nom_complet`,`grade`,`role`) VALUES (?,?,?)";
            //die("Ca marche");
            $result=$db->executeUpdate($sql,[$this->nomComplet, $this->grade, parent::$role]);
        $db->closeConnexion();
        return $result;
    }

    


    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}