<?php
namespace Cas\Models;
use Cas\Config\Constantes;

class Professeur extends Personne{
    private string $grade;

    public function __construct()
    {
        $this->role=Constantes::ROLE_PROFESSEUR;
    }

    //ManyToMany avec Classe
    public function classes():array{
        return [];
    }
   
    //Redefinition
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like '".self::$role."'";
        echo $sql;
        return [];
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