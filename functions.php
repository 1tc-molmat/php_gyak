<?php
/*
 fgv definiálása,paraméterek,visszatérési érték,
*/

//Írj egy függvényt ami visszaadja két szám összegét
function sum($a, $b) : int{
    return $a + $b;
}

$s1= sum(5,10);
echo "{$s1}<br>";
$s2 =sum("4","6");
echo $s2;
?>