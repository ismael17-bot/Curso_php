<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<pre>
<body>
 <?php
  require_once "animal.php";
  require_once "ave.php";
  require_once "mamifero.php";
  require_once  "peixe.php";
  require_once "reptil.php";
 
  $peixe=new Peixe();
  $peixe->locomover();
  $peixe->alimentar();
  $peixe->emitirSom();
 
 ?>   
</body>
</pre>
</html>