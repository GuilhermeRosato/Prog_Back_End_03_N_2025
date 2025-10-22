<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06_04 16/09/25</title>
</head>
<body>
    <?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
/*
=   atribuição
==  igualdade 
=== identico
*/
echo "<hr>";
$d=10;
$e=10;
$f=11;
echo "Menor: ".($d<$e)."<br>";
echo "Menor ou igual: ".($d<=$e)."<br>";
echo "Maior: ".($f>$e)."<br>";
echo "Maior ou igual: ".($f>=$e)."<br>";
?>
</body>
</html>