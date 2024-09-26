<?php
/*Дан массив:

[1, '', 2, 3, '', 5]
Удалите из массива все пустые строки.*/ 
$z = [1, "", 2, 3, "", 5];
echo "<pre>";
print_r($z);
for ($i=0; $i<count($z); $i++)
{
	if (array_search("", $z) != 0){
	unset($z[array_search("", $z)]);
	}
}
echo "<pre>";
print_r($z);