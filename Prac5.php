<?php
$a=$_GET["n"];

if(($a % 4 == 0 ) && ($a % 100 != 0||$a % 400 ==0))
{
    echo $a. " es un año bisiesto ";  
}else{
    echo $a. " no es un año bisiesto "; 
}


