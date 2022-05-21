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

    /**
     * Get the value of session
     */ 
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set the value of session
     *
     * @return  self
     */ 
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }
}