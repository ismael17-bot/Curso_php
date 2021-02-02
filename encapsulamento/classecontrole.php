<?php
require_once 'intercontrola.php';
 class ControleRemoto implements Controlador
 {
     private $volume;
     private $ligado;
     private $tocando;
     
     public function __construct()
     {
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
     }

     public function getVolume(){
         return $this->volume;
     }
     public function setVolume($v){
        $this->volume=$v;
     }
     public function getligado(){
         return $this->ligado;
     }
     public function setligado($l){
         $this->ligado=$l;
     }
     public function getTocando(){
         return $this->tocando;
     }
     public function setTocando($t){
         $this->tocando=$t;
     }

     //
     public function ligar(){
        $this->setligado(true);
     }
     public function desligar(){
        $this->setligado(false);
    }
    public function abriMenu(){
       
         echo "<br>Está ligado?".($this->getligado()?"SIM<br>":"NÃO");
         echo "<br>Está tocando?".($this->getTocando()?"SIM<br>":"NÃO");
         echo "<br>Volume:<br>".$this->getVolume();
         for ($i=0;$i<=$this->getVolume();$i+=10){
             echo"|";
         }
         echo "<br>";
    }
    public function fechaMenu(){
         echo "Fechando menu...";
    }
    public function maisVolume(){
         if($this->getligado()){
             $this->setVolume($this->getVolume()+5);
         }else{
             echo"A tv esta desligada";
         }
    }
    public function menosVolume(){
         if ($this->getligado()) {
            $this->setVolume($this->getVolume()-5);
         }
    }
    public function ligaMudo(){
         if($this->getligado()&&$this->getVolume()>0){
             $this->setVolume(0);
         }
    }
    public function desligaMudo(){
        if($this->getligado()&&$this->getVolume()==0){
            $this->setVolume(50);
        } 
    }
    public function play(){
         if($this->getligado()&& !($this->getTocando())){
             $this->setTocando(true);
         }
    }
    public function pause(){
        if($this->getligado()&&$this->getTocando()){
            $this->setTocando(false);
        }
         
    }
 }
?>