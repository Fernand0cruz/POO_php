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
    echo "salve cambada";

    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    // só pd usar as function disponiveis na interface pois as utilizaads no 
    // obj estão privadas

    // operaçoes possiveis, tenho rever esse trem
    // ligar();
    // desligar();
    // abrirMenu();
    // fecharMenu();
    // maisVolume();
    // menosVolume();
    // ligarMudo();
    // desligarMudo();
    // play();
    // pause();

    $c = new ControleRemoto();
    $c->ligar();
    $c->play();
    $c->maisVolume(50);
    $c->menosVolume(50);
    
    $c->abrirMenu();
    
    

    ?>
    </pre>
</body>

</html>