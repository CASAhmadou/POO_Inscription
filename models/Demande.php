<?php
namespace App\Model;
use App\Core\Model;

class Demande extends Model{
    private int $id;
    private string $motif;
    private string $etat;
    private string $date;

    public function __construct()
    {
        
    }
    

    public function inscriptions():Demande{
        return new Demande();
    }

    public static function findAll():array{
        $sql="select d.*, p.nom_complet from demande d, personne p
        where d.etudiant_id=p.id";    
        return parent::findBy($sql,[]);
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
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

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

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}