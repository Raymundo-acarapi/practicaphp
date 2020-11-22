<?php
$a=$_GET["n"];
$b=$_GET["n1"];
{
$suma=$a+$b;
$resta=$a-$b;
$multiplicacion = $a*$b;
$division =floor($a/$b);
$modulo = $a%$b;
}
echo "Los numeros utilizados son: $a y $b <br>"; 

echo "la suma es: " .$suma. "<br>";
echo "la resta es: " .$resta. "<br>";
echo "la multiplicacion es: " .$multiplicacion. "<br>";
echo "la division es: " .$division. "<br>";
echo "el modulo es: " .$modulo. "<br>";
?>
