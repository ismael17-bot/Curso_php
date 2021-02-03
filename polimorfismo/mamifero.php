<?php
require_once "animal.php";
class Mamifero extends Animal
{
    private $corPelo;

    public function getCorPelo(){
       return $this->corPelo;
    }
    public function setCorPelo($cor){
        $this->corPelo=$cor;
    }
    public function locomover(){
        echo "Correndo";
    }
    public function alimentar(){
        echo "mamando";
    }
    public function emitirSom(){
        echo "som mamifero";
    }



}
?>