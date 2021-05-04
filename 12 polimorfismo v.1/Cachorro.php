<?php
require_once "Mamifero.php";
class Cachorro extends Mamifero
{
    public function emitirSom()
    {
        echo "<p>Au!Au!Au!Au!Au!</p>";
    }

    public function reagirFrase($frase){
        if ($frase == "Toma comida" || $frase == "Ola") {
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    public function reagirHora($hora, $min){
        if($hora<12){
            echo "<p>Abanar</p>";
        }elseif($hora>=18){
            echo "<p>ignorar</p>";
        }else{
            echo "<p>Abanar e Latir</p>";
        }
    }
    public function reagirDono($dono){
        if ($dono ) {
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e latir</p>";
        }
    }
    public function reagirIdadePeso($idade, $peso){
        if ($idade < 5) {
            if($peso < 10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }
        }
    }
}
