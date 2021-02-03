<?php
require_once "animal.php";
class Ave extends Animal
{
    public function locomover(){
        echo "voando";
    }
    public function alimentar(){
        echo "graos";
    }
    public function emitirSom(){
        echo "som de ave";
    }
}

?>
