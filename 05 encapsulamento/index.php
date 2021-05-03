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

    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    // só pd usar as function disponiveis na interface pois as utilizaads no 
    // obj estão privadas

    // operaçoes possiveis, tenho q rever esse trem
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
    // $c->desligar();
    $c->play();
    $c->maisVolume();
    $c->menosVolume();
    // $c->ligarMudo();
    // $c->desligarMudo();
    // $c->pause();
    $c->abrirMenu();
    // $c->fecharMenu();
    
    

    ?>
    </pre>
</body>

</html>