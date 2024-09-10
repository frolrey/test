<?php
//Дан массив с числами. Оставьте в нем только положительные числа.
$z = range(-10,10);
var_dump($z);
echo "<pre>";
for ($i=0; $i<count($z); $i++)
{
	if($z[$i]<0)
	{
		unset($z[$i]);
	}
}
var_dump($z);