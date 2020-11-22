<?php
$n=$_GET["n"];
$s=0; $a=$n;
while($n>0)
{
    $s = $s + $n% 10;
    $n = $n/10;
}
echo " la suma de los digitos $a";
echo " es: $s"; 


