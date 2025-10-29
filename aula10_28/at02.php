<?php
echo "<h1>Array Associativo </h1>";
$idade = ["João" => 25, "Maria" => 30, "Pedro" => 35];
echo $idade["Maria"]; // Saída: 30
echo "<br> idade[Pedro] = ".$idade["Pedro"]."<br>";
$estudante=["nome"=>"Bete","curso"=>"TADS","ra"=>"1234"];
echo "Nome: ".$estudante["nome"];
echo "<br>RA: ".$estudante["ra"];
echo "<br>Curso: ".$estudante["curso"];
?>