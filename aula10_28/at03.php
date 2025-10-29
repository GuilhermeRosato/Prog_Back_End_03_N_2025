<?php
echo "<h1>Array Multidimencional</h1>";
$produtos=[
    ["teclado", 100],
    ["mouse", 50],
    ["monitor", 700]
];
$num=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
echo $produtos[1][0]."<br>"; // Saída: mouse
echo $num[0][0]." ".$num[1][1]." ".$num[2][2];
echo "<hr>";
$naval=[
    ["agua","submarino","agua","agua"],
    ["agua","agua","agua","veleiro"],
    ["avião","agua","agua","agua"],
    ["agua","agua","lancha","agua"]
];
echo "<br>".$naval[3][2]." ".$naval[2][0]." ".$naval[0][1]." ".$naval[1][3];
echo "<hr>";
$bd=[
    ["id"=>1,"nome"=>"bete","nota"=>8],
    ["id"=>2,"nome"=>"beto","nota"=>7],
    ["id"=>3,"nome"=>"betina","nota"=>9],
];
echo "<br>Nome: ".$bd[2]["nome"]." nota: ".$bd[2]["nota"];
$bd[2]["nota"]+=0.5;
echo "<br>Nota final: ".$bd[2]["nota"];
?>