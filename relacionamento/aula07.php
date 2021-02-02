<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require_once "classelutador.php";
        require_once "classeluta.php";
        $l=array();
        $l[0]=new Lutador("ismael","brasil",19,1.78,60.8,12,0,0);
        $l[1]=new Lutador("jorlei","inglaterra",32,1.75,57.8,14,2,3);
        $l[2]=new Lutador("pedro","nova Zelandia",34,1.80,115,14,4,2);
        $l[3]=new Lutador("jubileu","brasil",32,1.78,112,14,3,2);
        $l[4]=new Lutador("irineu","brasil",27,1.81,75,15,2,0);
        $l[5]=new Lutador("escannor","brasil",30,1.78,76,13,0,1);
        
          
        $UEC=new luta();
        $UEC->marcarLuta($l[3],$l[1]);
        $UEC->lutar();
        
    ?>
  
</body>
</html>