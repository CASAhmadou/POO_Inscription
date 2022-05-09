<?php
namespace Cas\Models;
use Cas\Core\Model;

class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $niveau;
    private string $filliere;

    public function __construct()
    {
        self::$table='classe';
    }

    public function professeurs():array{
        return [];
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of filliere
     */ 
    public function getFilliere()
    {
        return $this->filliere;
    }

    /**
     * Set the value of filliere
     *
     * @return  self
     */ 
    public function setFilliere($filliere)
    {
        $this->filliere = $filliere;

        return $this;
    }
}