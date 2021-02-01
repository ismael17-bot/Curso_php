<?php
class Caneta{
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampa;

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