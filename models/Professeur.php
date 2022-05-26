<?php
namespace App\Model;
use App\Core\Constantes;

class Professeur extends Personne{
    private string $grade;
    private array $classes=[];

    public function __construct()
    {
        parent::$role=Constantes::ROLE_PROFESSEUR;
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
            $results=$db->executeUpdate($sql,[$this->nomComplet, $this->grade, parent::$role]);
            
            // dd($results);
        $db->closeConnexion();
        return $results;
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

    /**
     * Get the value of classes
     */ 
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set the value of classes
     *
     * @return  self
     */ 
    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }
}