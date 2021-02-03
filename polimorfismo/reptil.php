<?php
require_once "animal.php";
class Reptil extends Animal
{
    private $corEscama;
    public function getCorEscama(){
        return $this->corEscama;
     }
     public function setEscama($cor){
         $this->corEscama=$cor;
     }
     public function locomover(){
        echo "ratejando";
    }
    public function alimentar(){
        echo "vegetal";
    }
    public function emitirSom(){
        echo "som reptil";
    }
}


?>