<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<?php
    require_once "pessoa.php";
    require_once "professor.php";
    require_once "aluno.php";
    require_once "funcionario.php";


    $p1=new Pessoa();
    $p2=new Aluno();
    $p3=new Professor();
    $p4=new Funcionario();
    
    $p1->setNome("ismael");
    $p2->setNome("Pedro");
    $p3->setNome("Joel");
    $p4->setNome("KAKA");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);



?> 
</pre>   
</body>
</html>