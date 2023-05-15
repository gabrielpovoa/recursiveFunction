<?php

$generateRandon = rand(1,1500);


$list = str_split($generateRandon);

$max = max($list);
echo "MAX: ".$max. "<br>";
 
$min = min($list);
echo "MIN: ". $min. "<br>";