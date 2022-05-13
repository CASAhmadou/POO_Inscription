<?php
namespace App\Model;
use App\Config\Constantes;

class RPD extends user{

    public function __construct()
    {
        self::$role=Constantes::ROLE_RPD;
    }

    //Redefinition
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like '".self::$role."'";
        echo $sql;
        return [];
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `personne` (`login`,`password`,`role`) VALUES (?,?,?)";
            $result=$db->executeUpdate($sql,[$this->login,$this->password,parent::$role]);
        $db->closeConnexion();
        return $result;
    }
}