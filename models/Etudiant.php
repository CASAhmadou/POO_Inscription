<?php
namespace Cas\Models;
use Cas\Config\Constantes;

class Etudiant extends User{
    private string $matricule;

    public function __construct()
    {
        self::$role=Constantes::ROLE_ETUDIANT;
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