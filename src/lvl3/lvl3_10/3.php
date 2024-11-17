<?php
//Даны два числа. Получите массив цифр, которые есть и в одном, и во втором числе.
$num1 = 27893045;
$num2 = 23678957689;
$arr = [];
$a1 = mb_str_split(strval($num1));
$a2 = mb_str_split(strval($num2));
foreach ($a1 as $key => $value) {
        if (array_search($value, $a2) != 0) {
            $arr[] = $value;
        }
}
echo "<pre>";
print_r($arr);