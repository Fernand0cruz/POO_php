<?php
include_once "Mamifero.php";
class Canguru extends Mamifero
{
    public function locomover()
    {
        // sebrescrevi o metodo de mamiferi, uma vez q um canguru se locomove pulado e não correndo
        echo "<p>Pulando</p>";
    }   
}
