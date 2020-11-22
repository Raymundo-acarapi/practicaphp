<?php
$n=$_GET["n"];
$m; $x=1;
$b=$n;
for($a=0;$a<$b;$a++)
{
    for($j=$a;$j<$n;$j++)
    {
        $m[$a][$j]=$x;
        $x=$x+1;
    }
    for($i=$a+1;$i<$n;$i++)
    {
        $m[$i][$n-1]=$x;
        $x=$x+1;
    }
    for($j=$n-2;$j>=$a;$j--)
    {
        $m[$n-1][$j]=$x;
        $x=$x+1;
    }
    for($i=$n-2;$i>$a;$i--)
    {
        $m[$i][$a]=$x;
        $x=$x+1;
    }
    $n--;

}
echo "<br>";
for($i=0;$i<$b;$i++)
{
    for($j=0;$j<$b;$j++)
    {
        echo $m[$i][$j] ." ";
    }
    echo "<br>";
}



