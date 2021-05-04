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
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Canguru.php";
    require_once "Cachorro.php";
    require_once "Cobra.php";
    require_once "Tartaruga.php";
    require_once "Goldfish.php";
    require_once "Arara.php";
    
    // $m1 = new Mamifero();
    // $m1->alimentar();
    // $m1->locomover();
    // $m1->emitirSom();
    // print_r($m1);
    
    // $r1 = new Reptil();
    // $r1->alimentar();
    // $r1->locomover();
    // $r1->emitirSom();
    // print_r($r1);
    
    // $p1 = new Peixe();
    // $p1->alimentar();
    // $p1->locomover();
    // $p1->emitirSom();
    // $p1->soltarBolhas();
    // print_r($p1);
    
    // $a1 = new Ave();
    // $a1->alimentar();
    // $a1->locomover();
    // $a1->emitirSom();
    // $a1->fazerNinho();
    // print_r($a1);

    $canguru = new Canguru();
    $cachorro = new Cachorro();
    $cobra = new Cobra();
    $tartaruga = new Tartaruga();
    $goldfish = new Goldfish();
    $arara = new Arara();

    $canguru->locomover();
    $canguru->emitirSom();
    $canguru->alimentar();
    echo "<br><br>";
    $cachorro->locomover();
    $cachorro->emitirSom();
    $cachorro->alimentar();
    echo "<br><br>";
    $cobra->locomover();
    $cobra->emitirSom();
    $cobra->alimentar();
    echo "<br><br>";
    $tartaruga->locomover();
    $tartaruga->emitirSom();
    $tartaruga->alimentar();
    echo "<br><br>";
    $goldfish->locomover();
    $goldfish->emitirSom();
    $goldfish->alimentar();
    $goldfish->soltarBolhas();
    echo "<br><br>";
    $arara->locomover();
    $arara->emitirSom();
    $arara->alimentar();
    $arara->fazerNinho();
    echo "<br><br>";

    
    ?>
    </pre>
</body>

</html>