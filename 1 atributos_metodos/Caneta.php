<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar (){
        if($this->tampada == true){
            echo"Não posso rabiscar...   :(";
        }else{
            echo "Estou a rabiscar...   :)";
        }
    }
    function tampar (){
        $this->tampada = true;
    }
    function destampar (){
        $this->tampada = false;

    }
}