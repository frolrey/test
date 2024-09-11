<?php
//Дан массив. Удалите из него элементы с заданным значением.
$z = range(1,20);
foreach ($z as $key => $value) {
	if ($value == 7)
	{
		unset($z[$key]);
	}
}
print_r($z);