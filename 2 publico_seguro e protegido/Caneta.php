<?php

class Caneta
{
    // atributos
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    // metodos
    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Não posso rabiscar...   :(<br>";
        } else {
            echo "Estou a rabiscar...   :)<br>";
        }
    }
    public function tampar()
    {
        $this->tampada = true;
        echo"caneta com a tampa<br>";
    }
    public function destampar()
    {
        $this->tampada = false;
        echo"Caneta sem a tampa<br>";
    }
}
