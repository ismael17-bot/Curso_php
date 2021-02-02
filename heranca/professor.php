<?php
require_once "pessoa.php";
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($esp){
        $this->especialidade=$esp;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($sal){
        $this->salario=$sal;
    }


    public function receberAumento($valor){
        $this->setSalario($this->getSalario()+$valor);
    }

}

?>