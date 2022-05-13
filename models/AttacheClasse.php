<?php
namespace App\Model;
use App\Config\Constantes;

class AttacheClasse extends User{

    //attribut navigationnel(1ere approche)
    //private array $inscriptions;

    public function __construct()
    {
        parent::$role=Constantes::ROLE_ATTACHE;
        $this->inscriptions=[];    
    }

    //OneToMany
    //function navigationnel(2eme approche)
    public function inscriptions():array
    {
        return [];
    }

    //Redefinition
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like ROLE_ATTACHE";
        echo $sql;
        return [];
    }
}