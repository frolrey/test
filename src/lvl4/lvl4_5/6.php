<?php
//Сделайте функцию, которая будет возвращать сумму N первых чисел Фибоначчи.
function FiboNumbers(int $n):int
{
    $p = [0 , 1];
    for ($i = 1; $i < $n-1; $i++) {
        $p[] = $p[$i] + $p[$i - 1];
    }
    echo "<pre>";
    print_r($p);
    return array_sum($p);
}
$n = 7;
echo FiboNumbers($n);