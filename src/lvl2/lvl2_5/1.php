<?php
/*Дана некоторая строка, например, вот такая:

'023m0df0dfg0'
Получите массив позиций всех нулей в этой в строке.*/

echo "<pre>".$z = "023m0df0dfg0"."<br>";
$h = mb_str_split($z);
$k = [];
foreach ($h as $key => $value)
{
	if ($value == 0)
	{
		$k[] = $key;
	}
}
print_r($k);