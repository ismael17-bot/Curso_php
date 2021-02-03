<?php
require_once 'pessoa.php';
class Assinante extends Pessoa
{
   private $login;
   private $totAssistido;

   public function __construct($n,$idade,$s,$log){
        parent::__construct($n,$idade,$s);
       $this->setLogin($log);
       $this->setExp(0);
       $this->setTot(0);
   }
   
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login=$login;
    }
    public function getTot(){
        return $this->totAssistido;
    }
    public function setTot($tot){
        $this->totAssistido=$tot;
    }

    public function viuMaisUm(){
        $this->setTot($this->getTot()+1);
    }
}



?>