<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    function getVolume()
    {
        return $this->volume;
    }

    function getLigado()
    {
        return $this->ligado;
    }

    function getTocando()
    {
        return $this->tocando;
    }

    function setVolume($volume)
    {
        $this->volume = $volume;
    }

    function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    public function ligar()
    {
    }

    public function desligar()
    {
    }

    public function abrirMenu()
    {
    }

    public function fecharMenu()
    {
    }

    public function maisVolume()
    {
    }

    public function menosVolume()
    {
    }

    public function ligarMudo()
    {
    }

    public function desligarMudo()
    {
    }

    public function play()
    {
    }

    public function pause()
    {
    }
}
