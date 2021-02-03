<?php
require_once "video.php";
require_once "Assinante.php"; 
class Visualizacao 
{
    private $espectador;
    private $filme;

    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espc){
        $this->espectador=$espc;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function set($filme){
        $this->filme=$filme;
    }

    public function __construct($espectador,$filme){
        $this->espectador=$espectador;
        $this->filme=$filme;
        $this->filme->setViwes($this->filme->getViwes()+1);
        $this->espectador->setTot($this->espectador->getTot()+1);
    }



    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcen($porcen){}
}


?>