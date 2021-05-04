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
    require_once "Gafanhoto.php";
    require_once "Video.php";
    require_once "Vizualizacao.php";

    $v[0] = new Video("php");
    $v[1] = new Video("javascript");
    $v[2] = new Video("full dev web");
    // print_r($v);

    $g[0] = new Gafanhoto("nando", 21, "M", "Login?");
    $g[1] = new Gafanhoto("Josicreia", 79, "F", "Josi");
    // print_r($g);
    
    $vis[0] = new Vizualizacao($g[0], $v[0]);
    $vis[2] = new Vizualizacao($g[0], $v[1]);
    $vis[0]->avaliar();
    print_r($vis);
    
    

    ?>
    </pre>
</body>

</html>