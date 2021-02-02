<?php
    require_once "classelutador.php";
    class Luta 
    {
        //Atributos
        private  $desafiado;
        private  $desafiante;
        private $rounds;
        private $aprova;

        //----------------------------------------------------
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiado($desafiado){
            $this->desafiado=$desafiado;
        }
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setDesafiante($desafiante){
            $this->desafiante=$desafiante;
        }
        public function getRounds(){
            return $this->rounds;
        }
        public function setRounds($rounds){
            $this->rouds=$rounds;
        }
        public function getAprova(){
            return $this->aprova;
        }
        public function setAprova($aprova){
            $this->aprova=$aprova;
        }
        //--------------------------------------------------

        public function marcarLuta($l1,$l2){
            if(($l1->getCategoria()===$l2->getCategoria())&&($l1!=$l2)){
                $this->setAprova(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprova(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar(){
            if($this->aprova){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor= rand(0,2);
                switch ($vencedor){
                    case 0:
                        echo"<p>Houve empate<p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>". $this->desafiado->getNome()." Venceu a luta";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>". $this->desafiante->getNome()." Venceu a luta";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;    
                } 
            }else{
                echo "Luta não pode acontecer";
            }
        } 

    }
?>