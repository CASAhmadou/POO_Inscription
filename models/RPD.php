<?php
namespace Cas\Models;
use Cas\Config\Constantes;

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
}