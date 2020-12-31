<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";
$a = 100;  
$b = "100";
$q = 100;  
$e = "100";
$z = 100;  
$c = "100";
$i = 100;  
$o = "100";
$w = 100;
$s = 50;
$u = 10;
$j = 50;
$t = 50;
$k = 50;
$n = 50;
$m = 50;

var_dump($x == $y,","); // returns true because values are equal
var_dump($a === $b,",");
var_dump($q != $e,",");
var_dump($z <> $c,",");
var_dump($i !== $o,",");
var_dump($w > $s,",");
var_dump($u < $j,",");
var_dump($t >= $k,",");
var_dump($n <= $m,",");
$p = 5;  
$l = 10;

echo ($p <=> $l); // returns -1 because $x is less than $y
echo "<br>";

$p = 10;  
$l = 10;

echo ($p <=> $l); // returns 0 because values are equal
echo "<br>";

$p = 15;  
$l = 10;

echo ($p <=> $l); // returns +1 because $x is greater than $y

?>  

</body>
</html>
