<?php
//Сделайте функцию, которая параметром будет принимать число, а возвращать сумму его делителей.

function SumOfDels($num){
    $k = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $k[] = $i;
        }
    }
    return array_sum($k);
}
$num = 6;
echo SumOfDels($num);