<?php
class Model{
    private static $_bdd;

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8','root','');
        self::$_bdd = 
    }
}