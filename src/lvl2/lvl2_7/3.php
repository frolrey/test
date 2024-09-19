<?php
/*Дано некоторое число, например, такое:

123789
Удалите из этого числа все нечетные цифры. В нашем случае получится такой результат:

28*/
$z = 123789;
$zz = strval($z);
$zzz = mb_str_split($zz);
foreach ($zzz as $key => $value)
{
	if ($value % 2 != 0 )
	{
		unset($zzz[$key]);
	}
}
echo "<pre>";
print_r($zzz);