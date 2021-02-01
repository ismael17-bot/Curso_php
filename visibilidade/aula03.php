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
     require_once "classes3.php";
     $c1=new Caneta;
     $c1->modelo="BIC cristal";
     $c1->cor="Preta";
     $c1->tampar();
     print_r($c1);
    ?>
 </pre>   
</body>
</html>