<?php
/*Дано некоторое число:

123456
Найдите сумму пар цифр этого числа. В нашем случае имеется ввиду следующее:

12 + 34 + 56*/
$z = 123456;
$v = mb_str_split(strval($z));
$blya = [];
for ($i=1; $i<count($v); $i+=2)
{
	$blya[] = strval($v[$i-1]).strval($v[$i]);;
}
echo "<pre>";
print_r($blya);
print_r(array_sum($blya));
