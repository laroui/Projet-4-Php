<?php
class Autor{
    private $lastName;
    private $firstName;
    private $idAutor;

    public function __construct($lastName,$firstName,$idAutor)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->idAutor = $idAutor;
    }

    public function nameAutor(){
        return $lastName.' '.$firstName;
    }
}
?>