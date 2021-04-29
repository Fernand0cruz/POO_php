<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

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
    }

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     *
     * @return  self
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
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

    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

    }

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
        $this->setCategoria();

    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    private function setCategoria()
    {
        if($this->peso < 50){
            $this->categoria = "Invalido";
        }elseif($this->peso <= 70){
            $this->categoria = "Leve";
        }elseif($this->peso <= 80){
            $this->categoria = "Medio";
        }elseif($this->peso <= 100){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Invalido";
        }
    }

    /**
     * Get the value of vitorias
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     *
     * @return  self
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

    }

    /**
     * Get the value of derrotas
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     *
     * @return  self
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

    }

    /**
     * Get the value of empates
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set the value of empates
     *
     * @return  self
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;

    }

    function apresentar(){
        echo "<p>---------------------------------</p>";
        echo "<p>Chegou a hora! o lutador " . $this->getNome();
        echo " Veio diretamente de " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg.<br>";
        echo " Ele tem " . $this->getVitorias() . " Vitorias<br>";
        echo  $this->getDerrotas() . " Derrotas<br>";
        echo  $this->getEmpates() . " Empates</p>";
        echo "<p>---------------------------------</p>";
    }
    function status(){
        echo "<p>---------------------------------</p>";
        echo "<p>" . $this->getNome() . " pertence a categoria peso " . $this->getCategoria();
        echo " já ganhou " . $this->getVitorias() . " vezes, perdeu " . $this->getDerrotas();
        echo " vezes e empatou " . $this->getEmpates() . " vezes.</p>";
        echo "<p>---------------------------------</p>";
    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
}
