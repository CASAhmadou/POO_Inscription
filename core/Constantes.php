<?php
namespace App\Core;

class Constantes{
    public const ROLE_RPD = "ROLE_RPD";
    public const ROLE_ETUDIANT = "ROLE_ETUDIANT";
    public const ROLE_ATTACHE = "ROLE_ATTACHE";
    public const ROLE_PROFESSEUR = "ROLE_PROFESSEUR";

    public const WEB_ROOT="http://localhost:8001/";
    
    public static function ROOT(){
        return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
    }

}