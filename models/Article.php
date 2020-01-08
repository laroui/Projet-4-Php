<?php
class Article extends Model
{
    private $_id;
    private $_autor;
    private $_title;
    private $_content;
    private $_date;

    public function __contruct($data){
        $this->ventilation($data);
    }

    public function ventilation($data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    public function setId($value){
        $value = (int) $value;
        if($value > 0){
            $this->_id = $value;
        }
    }
    public function setAutor($value){
        $this->getAutor($value);
    }

    public function setTitle($value){
        if(is_string($value)){
            $this->_title = htmlspecialchars($value);
        }
    }

    public function setContent($value){
        if(is_string($value)){
            $this->_title = htmlspecialchars($value);
        }
    }
    public function setDate($value){
        $this->_date = $value;
    }

}