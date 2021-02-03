<?php
require_once "acoes.php";
class Video implements acoesVideo
{
    private $titulo;
    private $avaliacao;
    private $viwes;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){
        $this->setTitulo($titulo);
        $this->avaliacao=1;
        $this->viwes=0;
        $this->curtidas=0;
        $this->setReproduzindo (false);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao){
        $media=0;
        $media=($this->avaliacao+$avaliacao)/2
        $this->avaliacao=$avaliacao;
    }
    public function getViwes(){
        return $this->viwes;
    }
    public function setViwes($viwes){
        $this->viwes=$viwes;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCuritdas($curtidas){
        $this->curtidas=$curtidas;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo=$reproduzindo;
    }

    public function play(){
        $this->setReproduzindo(true);

    }
    public function pause(){
        $this->setReproduzindo(false);

    }
    public function like(){
        $this->setCuritdas($this->getCurtidas()+1);
    }

    
}

?>