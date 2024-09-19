<?php
/*Даны два массива:

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
Слейте эти массивы в новый массив следующим образом:

[1, 2, 'a', 'b', 'c', 3]*/ 
$arr1 = [1,2,3];
$arr2 = ["a", "b", "c"];
array_pop($arr1);
$suka = array_merge($arr1, $arr2);
$suka[] = 3;
echo "<pre>";
print_r($suka);