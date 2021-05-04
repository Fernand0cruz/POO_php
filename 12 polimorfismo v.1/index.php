<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "Mamifero.php";
    require_once "Lobo.php";
    require_once "Cachorro.php";
    // $m = new Mamifero();
    // $m->emitirSom();

    // $lobo = new Lobo();
    // $lobo->emitirSom();

    $cachorro = new Cachorro();
    // $cachorro->emitirSom();
    $cachorro->reagirFrase("Ola");
    $cachorro->reagirFrase("Vai apanhar");
    $cachorro->reagirHora(11,45);
    $cachorro->reagirHora(21,00);
    $cachorro->reagirDono(true);
    $cachorro->reagirDono(false);
    $cachorro->reagirIdadePeso(2 ,12.5);
    $cachorro->reagirIdadePeso(17,4.5);
    // $cachorro->();
    // $cachorro->();
    
    ?>
</body>

</html>