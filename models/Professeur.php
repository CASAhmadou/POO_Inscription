<?php
namespace App\Model;
use App\Config\Constantes;

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
        $sql="select * from ".parent::table()." where role like ROLE_PROFESSEUR";
        echo $sql;
        return [];
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`nom_complet`,`grade`,`role`) VALUES (?,?,?)";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role,$this->grade]);
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