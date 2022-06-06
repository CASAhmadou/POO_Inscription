<?php
namespace App\Model;
use App\Core\Model;

//Classe conctrete
abstract class Personne extends Model{
    //Attributs d'instance
    protected int $id;
    protected string $nomComplet;
    protected string $adresse;
    protected string $sexe;
    protected static string $role;

    //Attributs static
    protected static int $nbrPersonne;


    //Méthode constructer
    public function __construct()
    {
        
    }

    /*public static function findAll():array{      
        $sql="select * from ? where role like ?";
        return parent::findBy($sql,[parent::table(),self::$role]);
       
    }//id, `nom_complet`,`grade`,`role` */


  
    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }


    /**
     * Get the value of nbrPersonne
     */ 
    public function getNbrPersonne()
    {
        return $this->nbrPersonne;
    }

    /**
     * Set the value of nbrPersonne
     *
     * @return  self
     */ 
    public function setNbrPersonne($nbrPersonne)
    {
        $this->nbrPersonne = $nbrPersonne;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}