<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    include_once 'Caneta.php';
    $c1 = new Caneta("bic","azul","0.5");
    $c2 = new Caneta("fabercastell","rosa","1.0");
    // so da certo se for publico, pois estou acessando o atributo de forma direta
    // $c1->modelo = "bic";
    // vai da erro pois o atributo e privado, so consigo atribuir valor atraves de metodos no caso o metodo set
    // $c1->ponta = "0,2";

    // $c1->setModelo("bic");
    // $c1->setPonta(0.5);
    print_r($c1);
    print_r($c2);
    
    // echo"Tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
    ?>
    </pre>
</body>

</html>