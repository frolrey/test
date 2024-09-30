<?php
//Дано число. Получите первую четную цифру с конца этого числа.
$z = 1242356245;
$v = mb_str_split(strval($z));
for ($i=count($v)-1; $i>0; $i--)
{
	if($v[$i] % 2 ==0)
	{
		echo "number ".$v[$i];
		break;
	}
}