<?php
require_once "animal.php";
class Peixe extends Animal
{
    private $corEscama;
    public function getCorEscama(){
        return $this->corEscama;
     }
     public function setEscama($cor){
         $this->corEscama=$cor;
     }
     public function locomover(){
        echo "nadando<br>";
    }
    public function alimentar(){
        echo "residos do mar<br>";
    }
    public function emitirSom(){
        echo "nao tem<br>";
    }
}

?>