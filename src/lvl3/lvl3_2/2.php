<?php
//Дан массив. Удалите из него каждый пятый элемент.
$z = range(1,20);
echo "<pre>";
print_r($z);
$g = 0;
foreach($z as $key => $value)
{
	$g++;
	if ($g == 5){
		unset($z[$key]);
		$g = 0;
	}
}
print_r($z);