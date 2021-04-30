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
    require_once "Pessoa.php";
    require_once "Livro.php";

    $p[0] = new Pessoa("Nando", 21, "M");
    $p[1] = new Pessoa("Amanda", 27, "F");

    $l[0] = new Livro("Cinderela", "Sla", 240, $p[0]);
    $l[1] = new Livro("Bela adormecida", "Sla", 36, $p[0]);
    $l[3] = new Livro("Aladin", "Sla", 79, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(500);
    // $l[0]->avançarPag();
    // $l[0]->avançarPag();
    // $l[0]->avançarPag();
    // $l[0]->avançarPag();
    // $l[0]->voltarPag();
    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[3]->detalhes();

    // print_r($l[0]);

    ?>
    </pre>
</body>

</html>