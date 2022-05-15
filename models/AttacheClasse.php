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
        $db=self::dataBase();
        $db->connexionDB();
            $sql="select id, `nom_complet`,`role`, `login`, `password` from ".parent::table()." where role like 'ROLE_ATTACHE'";
        $results=$db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES (?,?,?,?)";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role, $this->login, $this->password]);
        $db->closeConnexion();
        return $result;
    }
}