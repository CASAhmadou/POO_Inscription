<?php
namespace App\Model;
use App\Core\Model;

class Inscription extends Model{
    private int $id;
    private string $etat;

    public function __construct()
    {

    }

    //ManyToOne function navigationnel
    public function AttacheClasse():AttacheClasse{
       $sql="select p.* from ".parent::table()." i,personne p 
                where p.id=i.ac_id; 
                and p.role like 'ROLE_ATTACHE'
                and i.id=?";
            return parent::findBy($sql,[$this->id]);
    }
    
    public function AnneeScolaire():AnneeScolaire
    {
        $sql="select a.* from ".parent::table()." i,annee_scolaire a 
                where a.id=i.annee_scolaire_id
                and i.id=?";
        return parent::findBy($sql,[$this->id]);
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