<?php
require_once "aluno.php";
class Bolsista extends Aluno
{
    private $bolsa;
    public function renovarBolsa(){
        echo "bolsa renovada";
    }
    // quando eu coloco final na funçao ele nao deixa override
    // pra sobrepor nao precisa de nada e automatico!!!!
    public function pagarMensalidade(){
      echo "desconto";
    }


}
?>