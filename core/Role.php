<?php
namespace App\Core;

class Role{
    private Session $session;

    public function __construct(SESSION $session)
    {
        $this->session=$session;
    }

    public static function isConnect():bool{
        return isset($session);
    }

    public static function isRPD(){
        //return isConnect() && $session["role"]==ROLE_RPD;
    }

    public static function isAC(){

    }

    public static function isEtudiant(){

    }

    public static function isProfesseur(){

    }
}