<?php
namespace App\Model;
use App\Core\Model;

class ClasseProfesseur extends Model{
    private int $id;
    private int $professeur;
    private int $classe;

    public function __construct()
    {
        
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `professeur_classe` (`classe_id`,`professeur_id`) VALUES (?,?)";
            $result=$db->executeUpdate($sql,[$this->classe,$this->professeur]);
            // dd($result);
        $db->closeConnexion();
        return $result;
    }

//ManyToMany avec Classe
// public function classes():array{
//     $sql="select c.* from classe c, personne p, professeur_classe pc 
//     where p.id=pc.professeur_id
//     and c.id=pc.classe_id 
//     and role like `ROLE_PROFESSEUR`";
//     return ([$sql]);
// }

    public static function classes(int $id)
    {
        $sql= "select c.libelle,p.nom_complet from classe c,personne p,professeur_classe pc
        where pc.classe_id=c.id and pc.professeur_id=p.id and p.id=$id"; 
        return parent::findBy($sql,[]);
    }
    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of professeur
     */ 
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * Set the value of professeur
     *
     * @return  self
     */ 
    public function setProfesseur($professeur)
    {
        $this->professeur = $professeur;

        return $this;
    }
}