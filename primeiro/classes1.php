<?php
class Caneta{
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampa;

  function rabiscar(){
    if ($this->tampa==true) {
        echo "<p>Erro está tampada</p>";
    }else{
        echo "<p>Estou rabiscando</p>";
    }  
    
  }
  function tampar(){
   $this->tampa=true;
  }
  function destampar(){
    $this->tampa=false;
  }

}






?>