<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require_once "classes1.php";
     $c1=new Caneta;
     $c1->cor="Azul";
     $c1->ponta=0.5;
     $c1->carga=90;
     $c1->tampa=false; 
     print_r($c1);
     print("<br>");

     $c2= new Caneta;
     $c2->cor="Verde";
     $c2->ponta=0.5;
     $c2->carga=50;
     print_r($c2);



     $c1->tampar();
     $c1->rabiscar();
    
    ?>
    
</body>
</html>