<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
     
     require_once "classesbanco.php";
     $p1= new ContaBanco();//$jubileu
     $p2= new ContaBanco();//$creuza
     //jubileu
     $p1->abrirConta("CC");
     $p1->setDono("jubileu");
     $p1->setnumConta(1111);
     $p1->depositar(300);
     $p1->pagarMensal();
     //
     
     //creuza
     $p2->abrirConta("CP");
     $p2->setDono("Creuza");
     $p2->setnumConta(2222);
     $p2->depositar(500);
     $p2->sacar(100);
     $p2->pagarMensal();
     //
     print_r($p1);
     print_r($p2);
    ?>
 </pre>   
</body>
</html>