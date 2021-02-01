<?php
 class ContaBanco
 {
   //Atributos
   public $numConta;
   protected $tipo;//cc=conta corrente//cp=conta poupança
   private $dono;
   private $saldo;
   private $status; 

   //metodo construtor
   public function ContaBanco(){
       $this->setStatus(false);
       $this->setSaldo(0);
       echo" Criado com sucesso <br>";
   }

   //#Get e Set 
   public function setnumConta($n){
       $this->numConta=$n;
   }
   public function getnumConta(){
       return $this->numConta;
   }
   public function setTipo($t){
       $this->tipo=$t;
   }
   public function getTipo(){
       return $this->tipo;
   } 
   public function setDono($d){
       $this->dono=$d;
   }
   public function getDono(){
       return $this->dono;
   }
   public function setSaldo($s){
       $this->saldo=$s;
   }
   public function getSaldo(){
       return $this->saldo;
    }
    public function setStatus($st){
        $this->status=$st;
    }
   public function getStatus(){
       return $this->status;
   }
   //#

   public function abrirConta($t){
      $this->setTipo($t);   
      $this->setStatus(true);
      if($this->getTipo()=="CC"){
          $this->setSaldo(50);
      }elseif ($this->getTipo()=="CP"){
           $this->setSaldo(150);
      }
       // status pra true
       //se for cc = recebe 50 reais
       //se for cp = recebe 150 reais
   }

   public function fecharConta(){
       if($this->getSaldo()>0){
           print ("Ainda contem dinheiro na conta");
       }elseif ($this->getSaldo()<0){
            print("Conta em debito");
       }else{
           $this->setStatus(false);
       }
        //verificar saldo 
        //verificar se esta devendo
   }

   public function depositar($v){
       if($this->getStatus()){
           $this->setSaldo($this->getSaldo()+$v);
       }else{
           print("Não tem como depositar");
       }
       //conferir status
       
   }
   public function sacar($vr){
    if($this->getStatus()==true){
        if($this->getSaldo()>=$vr){
            $this->setSaldo($this->getSaldo()-$vr);
        }else{
            print("Saldo insuficiente");
        }
    }else{
        print("impossivel sacar");
    }
        //conferir status
       //conferir saldo
   }
   public function pagarMensal(){
       if ($this->getTipo()=="CC") {
           $vm=12;
       }elseif($this->getTipo()=="CP"){
           $vm=20;
       }
       if ($this->getStatus()==true) {
            if($this->getSaldo()>$vm){
              $this->setSaldo($this->getSaldo()-$vm);
            }else{
                print("Não tem saldo");
            }
       }else{
        print("Impossivel pagar");
       }
       
        //mensalidade cc = 12 reais
        //mensalidade cp = 20 reais
   }
 }

?>