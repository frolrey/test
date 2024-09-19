<?php
//Дано число. Выведите в консоль количество четных цифр в этом числе.
echo "<pre>";
$z = 78149237;
$zz = strval($z);
$zzz = mb_str_split($zz);
$i = 0;
foreach($zzz as $value)
{
	if ($value % 2 == 0)
	{
        $i++;
	}
}
echo "колво четных цифр ".$i;
