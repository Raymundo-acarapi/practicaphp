<?php
$a=$_GET["n"];
$b=$_GET["n1"];
$c=$_GET["n2"];
if($a>$b){
    if($a>$c){
        echo $a. " es mayor que $b y $c";
    }else{
        echo $c. " es mayor que $a y $b";
    }
}else{
if($b>$c){
    echo $b. " es mayor que $a y $c";  
}else{
    echo $c. " es mayor que $a y $b";
}
}

   




