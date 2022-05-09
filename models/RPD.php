<?php
namespace Cas\Models;
use Cas\Config\Constantes;

class RPD extends user{

    public function __construct()
    {
        self::$role=Constantes::ROLE_RPD;
    }
}