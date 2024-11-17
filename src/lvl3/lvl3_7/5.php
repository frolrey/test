<?php
//Через запятую написаны числа. Получите максимальное из этих чисел.
$z = "5, 1234, 12, 6578, 2367";
$k = explode(" ", $z);
sort($k, SORT_NUMERIC);
print_r($k);
echo "<pre>";
echo $k[count($k) - 1];