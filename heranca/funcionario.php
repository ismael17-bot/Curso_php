<?php
require_once "pessoa.php";
class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor=$setor;
    }
    public function getTrabalho(){
        return $this->trabalhando;
    }
    public function setTrabalhando($trab){
        $this->trabalhando=$trab;
    }


    public function mudarTrabalho(){
        $this->setTrabalhando(false);

    }
}

?>