<?php
namespace App\Model;
use App\Core\Constantes;

class RPD extends User{

    public function __construct()
    {
        self::$role=Constantes::ROLE_RPD;
    }

    //Redefinition
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,['.self::$role.'],true);
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`nom_complet`,`login`,`password`,`role`) VALUES (?,?,?,?)";
            $result=$db->executeUpdate($sql,[$this->nomComplet,$this->login,$this->password,parent::$role]);
        $db->closeConnexion();
        return $result;
    }
}