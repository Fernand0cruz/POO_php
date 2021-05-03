<?php
require_once "Aluno.php";
class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "Bolsa renovada.<br>";
    }
    public function PagarMensalidade()
    {
        echo "<p>" . $this->getNome() . " é um bolsista então paga com desconto</p>";
    }

    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}