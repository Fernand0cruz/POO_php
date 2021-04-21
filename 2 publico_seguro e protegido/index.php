<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Doideira</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        // instancia da classe
        $c1 = new Caneta;
        $c1->modelo="Bic";
        $c1->cor="Vermelho";
        // não posso acessar pois e uma propriedade privada
        // $c1->ponta="0.5";
        // não posso acessar pois e uma propriedade protegida
        // $c1->carga="90";
        // $c1->tampada=false;
      

        
        // não posso tampar pois é privado
        $c1->tampar();
        $c1->rabiscar();

        print_r($c1);
    ?>
</body>
</html>