<?php

interface Controlador {
    // todas as functions dentro de interface são abstratas ou seja n serão trabalhados nesse codigo
    
    // Todas as funções em uma interface são implicitamente abstratas. Não há necessidade de usar 
    // a palavra-chave abstract ao declarar a função.
    
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
