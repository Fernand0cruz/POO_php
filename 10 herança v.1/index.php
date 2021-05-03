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
    require_once "Visitante.php";
    require_once "Aluno.php";
    require_once "Bolsista.php";
    
    $v1 = new Visitante();
    $v1->setNome("Luiz Fernando");
    $v1->setIdade(21);
    $v1->setSexo("M");
    print_r($v1);
    
    $a1 = new Aluno();
    $a1->setNome("Jão");
    $a1->setIdade(32);
    $a1->setSexo("M");
    $a1->setCurso("Sistemas de Inf.");
    $a1->setMatricula(2021);
    $a1->PagarMensalidade();
    print_r($a1);

    
    $b1 = new Bolsista();
    $b1->setNome("Madelaine");
    $b1->setIdade(26);
    $b1->setSexo("M");
    $b1->setCurso("Direito");
    $b1->setMatricula(2021);
    $b1->setBolsa(1111);
    $b1->PagarMensalidade();
    $b1->renovarBolsa();
    print_r($b1);

    ?>
    </pre>
</body>

</html>