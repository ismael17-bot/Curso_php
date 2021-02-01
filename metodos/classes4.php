<?php
class Caneta{
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampa;

  
  public function Caneta($m,$c,$p)//da pra por o mesmo nome que a classe
  //ou __construtor
  {
    $this->modelo=$m;
    $this->cor=$c;
    $this->ponta=$p;
    $this->tampar();
  }

  
 //#
  public function getCarga(){
    return $this->carga;
  }
  public function setCarga($j){
    $this->carga=$j;
  }
  public function getCor(){
    return $this->cor;
  }
  public function setCor($c){
   $this->cor=$c;
  }
  public function getModelo(){
    return $this->modelo;
  }
  public function setModelo($m){
    $this->modelo=$m;
  }
  public function getPonta(){
    return $this->ponta;
  }
  public function setPonta($p){
    $this->ponta=$p;
  }
 //#

  public function rabiscar(){
    if ($this->tampa==true) {
        echo "<p>Erro está tampada</p>";
    }else{
        echo "<p>Estou rabiscando</p>";
    }  
    
  }
  public function tampar(){
   $this->tampa=true;
  }
  public function destampar(){
    $this->tampa=false;
  }

}


?>