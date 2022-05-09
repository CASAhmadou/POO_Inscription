<?php
namespace Cas\Core;

interface IModel{

    //Methodes d'Instances
    public function insert():int;
    public function update():int;
    
    //Methodes Statics
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;
}

//Methode d'Instance => Objet 
/**Exemple
    * $obj= new Class();
    * $obj-> setId(1) 
    *     -> setLibelle("Mousse");
    * $obj -> update()
    // update from Class  set libelle="Mousse" where id=1 
**/


//Methode Static => Classe
/**Exemple
    * nomClasse::delete(1) // delete from Classe where id=1
    * 
    * class::findAll() // select * from class
**/