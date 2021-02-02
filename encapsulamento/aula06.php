<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<pre>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
    require_once "classecontrole.php";
    $c=new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->maisVolume();
    $c->abriMenu();
    
    
    ?>
    </pre>
</body>
</html>