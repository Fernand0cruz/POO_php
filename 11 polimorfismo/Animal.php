<?php
abstract class Animal{
    protected $nome;
    protected $idade;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of membros
     */ 
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     *
     * @return  self
     */ 
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}