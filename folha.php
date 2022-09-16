<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

<?php

$nome= $_POST['nome1'];
$ano1= $_POST['ano'];
$h = intval($_POST['horas']);
$vh = intval($_POST['vhora']);
$salab = $h * $vh;
$ir = ($salab/100* 15)  - 354.80;
$inss = ($salab/100 * 12) - 92.01;
$fgts = $salab - 92.01;
$salarioliq = $salab - $ir - $inss - $fgts;
echo $salarioliq;



 ?>



</body>
</html>
