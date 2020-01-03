<?php
class Article{
    private $title;
    private $contenu;
    private $auteur;
    private $date;

    public function __construct($title,$contenu,$auteur,$date) {
        $this->title = $title;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->date = $date;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getContenu(){
        return $this->contenu;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getDate(){
        return $this->date;
    }
}
?>