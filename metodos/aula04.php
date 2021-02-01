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
     require_once "classes4.php";
     //$c1=new Caneta;
     //$c1->setModelo("BIC");
     //$c1->setPonta(0.5);
     //print "Eu tenho uma caneta modelo {$c1->getModelo()} com a ponta {$c1->getPonta()}";
     
     $c2=new Caneta("BIC","Rosa",0.9);
     echo "<br>";
     print_r($c2);
     
    
    ?>
 </pre>   
</body>
</html>