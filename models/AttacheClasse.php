<?php
namespace Cas\Models;
use Cas\Config\Constantes;

class AttacheClasse extends User{

    //attribut navigationnel(1ere approche)
    //private array $inscriptions;

    public function __construct()
    {
        self::$role=Constantes::ROLE_ATTACHE;
        //$this->inscriptions=[];    
    }

    //OneToMany
    //function navigationnel(2eme approche)
    public function inscriptions():array
    {
        return [];
    }
}