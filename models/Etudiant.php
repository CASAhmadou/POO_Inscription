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
        $sql="select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[self::$role]);
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`matricule`,`nom_complet`,`login`,`password`,`adresse`,`sexe`,`role`) VALUES (?,?,?,?,?,?,?)";
            //die("Ca marche");
            $result=$db->executeUpdate($sql,[$this->matricule, $this->nomComplet, $this->login,$this->password,$this->adresse,$this->sexe, parent::$role]);
        $db->closeConnexion();
        return $result;
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