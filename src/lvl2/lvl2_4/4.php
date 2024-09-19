<?php
/*Дана некоторая строка:

'abcde'
Переведите в верхний регистр все нечетные буквы этой строки. В нашем случае должно получится следующее:

'AbCdE'*/
$zhaba = "abcde";
$h = mb_str_split ($zhaba);
$z = [];
$count = 0;
foreach($h as $key => $value)
{   
	$count++;
    if ($count % 2 == 1)
	{
		$k=strtoupper($value);
		$z[] = $k;
	}
	else
	{
		$z[] = $value;
	}
}
$c = implode("", $z);
echo "<pre>";
print_r($c);
