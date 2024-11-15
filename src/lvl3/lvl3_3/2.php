<?php
/*Дано некоторое число:

1357
Проверьте, что все цифры этого числа являются нечетными.*/ 
$z = 1357;
$k = 0;
$h = mb_str_split(strval($z));
foreach($h as $value)
{   
	echo $value % 2 . "<br>";
	if ($value % 2 == 1)
	{
		$k++;
	}
}
if ($k == strlen(strval($z)))
{
	echo "yos";
}
else {
	echo "niou";}