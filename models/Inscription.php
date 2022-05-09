<?php
namespace Cas\Models;
use Cas\Core\Model;

class Inscription extends Model{
    private int $id;
    private string $etat;

    public function __construct()
    {
        self::$table='inscription';
    }

    //ManyToOne function navigationnel
    public function AttacheClasse():AttacheClasse
    {
       $sql="select p.* from inscription i,personne p 
                where p.id=i.personne_id 
                and p.role like 'ROLE_ATTACHE'
                and i.id=".$this->id;
        return new AttacheClasse();
    }
    
    public function AnneeScolaire():AnneeScolaire
    {
        $sql="select a.* from inscription i,annee_scolaire a 
                where a.id=i.annee_scolaire_id
                and i.id=".$this->id;
        return new AnneeScolaire();
    }

    public function Etudiant():Etudiant{
        return new Etudiant();
    }

    public function Demande():Demande{
        return new Demande();
    }



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
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}