<?php
require_once "Pessoa.php";
class Visitante extends Pessoa{

    public function __construct()
    {
        $this->getNome();
        $this->getIdade();
        $this->getSexo();
    }
}