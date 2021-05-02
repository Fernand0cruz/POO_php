<?php
require_once "pessoa.php";

class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo, $setor)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setor = $setor;
        // $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho()
    {
        $this->trabalhando = !$this->trabalhando;
    }

    /**
     * Get the value of setor
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}
