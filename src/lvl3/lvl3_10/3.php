<?php
//Даны два числа. Получите массив цифр, которые есть и в одном, и во втором числе.
$num1 = 27893045;
$num2 = 23678957689;
$arr = [];
foreach (mb_str_split((string)($num1)) as $key => $value) {
    foreach (mb_str_split((string)($num2)) as $key2 => $value2) {
        if ($value == $value2) {
            $arr[] = $value;
        }
    }
}
print_r(array_unique($arr));
//echo "<pre>";
//print_r($arr);

echo "<pre>";
print_r(array_intersect(mb_str_split((string)($num1)), mb_str_split((string)($num2))));