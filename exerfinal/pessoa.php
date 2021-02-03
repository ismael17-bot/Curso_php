<?php
abstract class Pessoa 
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($n,$idade,$s){
        $this->setNome($n);
        $this->setIdade($idade);
        $this->setSexo($s); 
       
    }
//---------------------------------------
    public function getExp(){
        return $this->nome;
    }
    public function setExp($exp){
        $this->experiencia=$exp;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo ($sexo){
        $this->sexo=$sexo;
    }

    protected function ganharExp($n){
        $this->setExp($this->getExp()+$n);
    }
}

?>