<?php
class Model{
    private static $_bdd;

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8','root','');
        self::$_bdd-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$_bdd == null){
            self::setBdd();
            return self::$_bdd;
        }
    }
    protected function getAllArticles($obj){
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM articles');
        $req->excute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var = new $obj($data);
        }
        return $var;
        $req->closeCursor;
    }

    protected function getAutor($id_Autor){
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM autor WHERE id = ?');
        $req->excute([$id_Autor]);
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var = new Autor($data);
        }
        return $var;
        $req->closeCursor;
    }

}