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
    require_once "video.php";
    require_once "acoes.php";
    require_once "pessoa.php";
    require_once "Assinante.php";
    require_once "visualizacao.php";
     $v[0]=new Video("Aula um de POO");
     $v[1]=new Video("Aula dois de POO");
     $v[2]=new Video("Aula tres de POO");
     


    $j[0]=new Assinante("ismael",19,"masculino","213144124");
    
    $vin[0]= new visualizacao($j[0],$v[1]);

    print_r($vin);
    ?>
</pre>
</body>
</html>