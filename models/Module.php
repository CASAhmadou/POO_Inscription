<?php
namespace App\Model;
use App\Core\Model;

class Module extends Model{
    private int $id;
    private string $nomModule;

    public function __construct()
    {
        
    }

    public static function findAll():array{      
        $sql="select * from module";
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