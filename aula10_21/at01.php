<?php
echo "<h2>While</h2>";
$i=0;
while($i<5){
    echo "$i ";
    $i++;
} 
echo "<br>valor inicial = 0<br>";
echo "condição = $ i<5<br>";
echo "contador = i++<br>";
echo "quantas vezes o loop foi executado = 5<br>";
echo "o valor que tornou a condição falsa = 5<br>";
echo "<hr>";
$j=13;
while($j<17){
    echo "$j ";
    $j++;
}
echo "<br>valor inicial = 13<br>";
echo "condição = $ j<17<br>";
echo "contador = j++<br>";
echo "quantas vezes o loop foi executado = 4<br>";
echo "o valor que tornou a condição falsa = 17<br>";
echo "<hr>";

$k=4;
while($k>=0){
    echo "$k ";
    $k--;
}
echo "<br>valor inicial = 4<br>";
echo "condição = $ k>=0<br>";
echo "contador = k--<br>";
echo "quantas vezes o loop foi executado = 5<br>";
echo "o valor que tornou a condição falsa = k>=0<br>";
echo "<hr>";

$l=0;
while($l<12){
    echo "$l ";
    $l+=2;
}
echo "<br>valor inicial = 0<br>";
echo "condição = $ l<12<br>";
echo "contador = l+=2<br>";
echo "quantas vezes o loop foi executado = 6<br>";
echo "o valor que tornou a condição falsa = l=12<br>";
echo "<hr>";

echo "<h2>do while</h2>";
$m=7;
do{
    echo "$m ";
    $m++;
}while($m<5);

echo "<br>valor inicial = 7<br>";
echo "condição = $ m<5<br>";
echo "contador = m++<br>";
echo "quantas vezes o loop foi executado = 1<br>";
echo "o valor que tornou a condição falsa = m=8<br>";
echo "<hr>";

echo "<h2>for</h2>";
for($n=0;$n<5;$n++)
    echo "$n ";

echo "<br>valor inicial = 0<br>";
echo "condição = $ n<5<br>";
echo "contador = n++<br>";
echo "quantas vezes o loop foi executado = 5<br>";
echo "o valor que tornou a condição falsa = n=6<br>";
echo "<hr>";

echo "<h2>loop aninhado</h2>";
for ($o=0; $o<4; $o++) {
  for ($p=0; $p<5; $p++) {
    echo "$o $p<br>";
  }
}

echo "<br>valor inicial = o=0 p=5<br>";
echo "condição = $ o<4<br>";
echo "contador = 0++  p++<br>";
echo "quantas vezes o loop foi executado = 20<br>";
echo "o valor que tornou a condição falsa = o=5<br>";
echo "<hr>";

for ($q=3; $q<6; $q++) {
  for ($r=1; $r<4; $r++) {
    echo "$q $r<br>";
  }
}

echo "<br>valor inicial = q=3 r=1<br>";
echo "condição = $ q<6<br>";
echo "contador = q++  r++<br>";
echo "quantas vezes o loop foi executado = 9<br>";
echo "o valor que tornou a condição falsa = q=6<br>";
echo "<hr>";

for ($s=1; $s<11; $s++) {
    echo"<h3>tabuada do $s</h3>";
  for ($t=0; $t<11; $t++) {
    echo "$s X $t =".$s*$t. "<br>";
  }
}

echo "<br>valor inicial = s=1 t=0<br>";
echo "condição = $ s<11<br>";
echo "contador = s++  t++<br>";
echo "quantas vezes o loop foi executado = 100<br>";
echo "o valor que tornou a condição falsa = s=11<br>";
echo "<hr>";
?>