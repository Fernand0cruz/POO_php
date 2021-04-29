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
    include_once "Lutador.php";
    include_once "Luta.php";
    $l = array();
    

    $l[0] = new Lutador("Nando", "br", 21, 1.70, 70, 32, 0, 1);
    $l[1] = new Lutador("Jão bosta", "ch", 53, 2.12, 70, 22, 16, 5);

    // $l[0]->apresentar();
    // $l[1]->apresentar();
    $UECO1 = new Luta();
    $UECO1->marcarLuta($l[0] ,$l[1]);
    $UECO1->lutar();


    ?>
    </pre>
</body>

</html>