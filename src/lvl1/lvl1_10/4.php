<?php
/*Даны два массива:

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
Слейте эти массивы в новый массив:

[1, 2, 3, 4, 5, 6]*/ 
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
var_dump(array_merge($arr1, $arr2));
foreach ($arr2 as $value) {
	$arr1[] = $value;
}
echo "<pre>";
print_r($arr1);