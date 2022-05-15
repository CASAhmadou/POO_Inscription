<?php
namespace App\Core;

class Role{
    private Session $session;

    public function __construct(SESSION $session)
    {
        $this->session=$session;
    }

    public static function isConnect(){

    }

    public static function isRPD(){

    }

    public static function isAC(){

    }

    public static function isEtudiant(){

    }

    public static function isProfesseur(){

    }
}