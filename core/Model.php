<?php
namespace App\Core;


abstract class Model implements IModel{

    protected static function dataBase():DataBase{
        return new DataBase();
    } 

    public static function table():string{
        $table=get_called_class();
        $table=str_replace("App\\Model\\","",$table);
        $table= ($table=="User" or $table=="Etudiant" or $table=="AttacheClasse" or $table=="RPD" or $table=="Professeur")?"personne":strtolower($table);
        return $table;
    }

    public function __construct()
    {
        
    }

    public function insert():int{
        return 0;
    }
    public function update():int{
        return 0;
    }
    public static function delete(int $id):int{
        $db=self::dataBase();
        $db->connexionDB();
            $sql="delete from '.self::table().' where id=?";
            $result=$db->executeUpdate($sql,[$id]);
        $db->closeConnexion();
      
        return $result;
    }
    public static function findAll():array{
        $db=self::dataBase();
        $db->connexionDB();
            $sql="select * from ".self::table();
        $result=$db->executeSelect($sql);
        $db->closeConnexion();

        return $result;
    }
    public static function findById(int $id):object|null{
        $db=self::dataBase();
        $db->connexionDB();
            $sql="select * from ".self::table()." where id=?";
        $result=$db->executeSelect($sql,[$id],true);
        $db->closeConnexion();

        return $result;
    }
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
        $db=self::dataBase();
        $db->connexionDB();
        $result=$db->executeSelect($sql,$data,$single);
        $db->closeConnexion();
        return $result;
    }

}
