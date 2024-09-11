<?php
//Дан массив с числами. Оставьте в нем только положительные числа.
$z = range(-10,10);
echo "<pre>";
print_r($z);
foreach ($z as $key => $value) {
	if ($value<0)
	{
		unset($z[$key]);
	}
}
print_r($z);