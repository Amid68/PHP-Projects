<?php

$initial = "555";
$a = octdec($initial);
echo "{$initial} in octal notation = {$a} in decimal notation\n";

$b = deg2rad($a);
echo "{$a} in degrees = {$b} in radian\n";

$c = cos($b);
echo "cos({$b}) = {$c}\n";

$d = round($c, 3);
echo "{$c} rounded to 3 decimal places = {$d}\n";

$e = log($d);
echo "The natural logarithm of {$d} = {$e}\n";

$f = abs($e);
echo "|{$e}| = {$f}\n";

$g = acos($f);
echo "arccos({$f}) = {$g}\n";

$h = rad2deg($g);
echo "{$g} in radian = {$h} in degrees\n";

$i = floor($h);
echo "{$h} floored = {$i}\n";

$j = $i - 47;
echo "The final answer is: {$i} - 47 = {$j}\n";


