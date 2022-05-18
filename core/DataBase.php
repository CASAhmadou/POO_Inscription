<?php
namespace App\Core;
use PDO;
use PDOException;

class DataBase{
    private \PDO|null $pdo=null;

    public function connexionDB():void{
        try {
            $this->pdo=new \PDO("mysql:dbname=gestion_inscription;host=127.0.0.1","castp5","castp5");
            //$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit('Erreur de Connexion');
        }
        

        //die("Ca marche");
    }
    public function closeConnexion():void{
        $this->pdo=null;
    }
    public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            $result=$query->fetch(\PDO::FETCH_OBJ);
            if($query->rowCount()==0) return null;
        }else {
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        return $query->rowCount();
    }
}