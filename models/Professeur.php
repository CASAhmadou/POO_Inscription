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
        
            $sql="select id, `nom_complet`,`grade`,`role` from ? where role like 'ROLE_PROFESSEUR'";
            return parent::findBy($sql,[parent::table()]);
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