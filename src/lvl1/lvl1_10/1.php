<?php
//Заполните массив случайными числами из промежутка от 1 до 100.
function array_random(array $array, int $n = 1): array
{
    if ($n < 1 || $n > count($array)) {
        throw new OutOfBoundsException();
    }

    return ($n !== 1)
        ? array_values(array_intersect_key($array, array_flip(array_rand($array, $n))))
        : array($array[array_rand($array)]);
}
$v = array_random(range(0,100), $n = 10);
print_r($v);