<?php
//Дан массив с числами. Найдите сумму положительных элементов этого массива.
$z = range(-10,10);
$f = 0;
for ($i=0; $i<=count($z)-1; $i++)
{
	if ($z[$i]>0)  {
		$f = $f+$z[$i];
	}
}
echo $f;