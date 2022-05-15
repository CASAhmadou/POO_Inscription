<?php
namespace App\Model;
use App\Core\Constantes;

class Etudiant extends User{
    private string $matricule;

    public function __construct()
    {
        self::$role=Constantes::ROLE_ETUDIANT;
    }

    //Redefinition
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like '".self::$role."'";
        echo $sql;
        return [];
    }



    /**
     * Get the value of matricule
     */ 
    public function getMatricule() 
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}