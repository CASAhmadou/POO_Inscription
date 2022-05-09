<?php
namespace Cas\Models;

class Module{
    private int $id;
    private string $nomModule;


    
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
     * Get the value of nomModule
     */ 
    public function getNomModule()
    {
        return $this->nomModule;
    }

    /**
     * Set the value of nomModule
     *
     * @return  self
     */ 
    public function setNomModule($nomModule)
    {
        $this->nomModule = $nomModule;

        return $this;
    }
}