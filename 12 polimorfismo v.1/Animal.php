<?php
abstract class Animal
{
    protected $peso;
    protected $idade;
    protected $menbros;
    
    public abstract function emitirSom();


    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

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
     * Get the value of menbros
     */ 
    public function getMenbros()
    {
        return $this->menbros;
    }

    /**
     * Set the value of menbros
     *
     * @return  self
     */ 
    public function setMenbros($menbros)
    {
        $this->menbros = $menbros;

        return $this;
    }
}
