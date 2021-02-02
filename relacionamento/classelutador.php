<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct ($nome,$nac,$idade,$altura,$peso,$vitorias,$derrotas,$empates)
    {
        $this->setNome($nome);
        $this->setNacionalidade($nac);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

//Get e Set
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nac){
        $this->nacionalidade=$nac;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso=$peso;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if($this->getPeso()<52.2){
            $this->categoria="invalido";
        }elseif($this->getPeso()<=70.3){
            $this->categoria="Peso Leve";
        }elseif($this->getPeso()<=83.9){
            $this->categoria="Peso Medio";
        }elseif ($this->getPeso()<=120.2){
            $this->categoria="Peso Pesado";
        }else{
            $this->categoria="invalido";
        }
        
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias=$vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas; 
    }
    public function setDerrotas($derrotas){
        $this->derrotas=$derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates=$empates;
    }

//
    public function apresentar(){
        echo "<p>----------------------------------------------------------<p>";
        echo "<p> Chegou a hora! o lutador ". $this->getNome();
        echo " veio diretamente de ".$this->getNacionalidade();
        echo " tem ".$this->getIdade()." anos e pesa ".$this->getPeso()."Kg";
        echo "<br>ele tem ".$this->getVitorias()." Vitorias ";
        echo $this->getDerrotas()." derrotas ".$this->getEmpates()." empates<p>";
        echo "<p>----------------------------------------------------------<p>";

    }
    public function status(){
        echo "<p>----------------------------------------------------------<p>";
        echo "<p>".$this->getNome()." é ".$this->getCategoria();
        echo " e ja ganhou ".$this->getVitorias(). " vezes. ";
        echo " perdeu ".$this->getDerrotas()." vezes ";
        echo " empatou ". $this->getEmpates()." vezes<p>";

    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
}
?>