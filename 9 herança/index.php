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
    require_once "pessoa.php";
    require_once "aluno.php";
    require_once "professores.php";
    require_once "funcionario.php";

    $p1 = new Pessoa("fenando", 21 ,"M");
    $p2 = new Aluno("Nando",27,"M",2021, "sistemas de inf." );
    $p3 = new Professor("Luana", 28, "F", "Geografia", 2500);
    $p4 = new Funcionario("Jão", 29, "M", "Escravo");

    $p1->fazerAniv();
   
    $p2->cancelarMatr();

    $p3->receberAumento(1500);

    // $p4->mudarTrabalho();

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
    </pre>
</body>

</html>