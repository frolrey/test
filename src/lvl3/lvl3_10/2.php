<?php
//Дан массив и число. Оставьте в массиве только те числа, которые являются делителями заданного числа.
$z = range(1,20);
$num = 23478;
foreach ($z as $k => $v) {
    if ($num % $v == 0) {
        echo "делится"."<br>";
    }
    else {
        unset($z[$k]);
    }
}
$zz = range(1,20);
echo '<pre>';
print_r(array_filter($zz, fn($h) => $num % $h === 0));
echo "<pre>";
print_r($z);