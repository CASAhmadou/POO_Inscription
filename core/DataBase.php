<?php
namespace App\Core;

class DataBase{
    private \PDO|null $pdo=null;

    public function connexionDB():void{
        $this->pdo=new \PDO("mysql:dbname=gestion_inscription;host=127.0.0.1","root","");
        //die("Ca marche");
    }
    public function closeConnexion():void{
        $this->pdo=null;
    }
    public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            $result=$query->fetch();
        }else {
            $result=$query->fetchAll();
        }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        return $query->rowCount();
    }
}