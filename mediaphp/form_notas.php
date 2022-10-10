<!DOCTYPE html>
<html lang="ept-brn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    
</head>
<body>
    <?php

        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
       

        $situacao="";
        $media=0.0;
           
            $media = ($nota1 + $nota2)/2;
           
            $situacao = ($media>=6)?"Aprovado":(($media>=4)?"Exame Final":"Reprovado");
        
       

    ?>
    <h1>Situação</h1>
    <p>Nome:<?php echo $nome ?></p>
    <p>Nota 1ºbimestre:<?php echo $nota1 ?></p>
    <p>Nota 2ª bimestre:<?php echo $nota2 ?></p>
    <p>Média:<?php echo $media ?></p>
    <p>Situação:<?php echo $situacao ?></p>
</body>
</html>