<?php

class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    // o contrutor pd ter o msm nome da classe
    public function __construct($m,$c,$p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }

}