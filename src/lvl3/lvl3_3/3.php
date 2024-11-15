<?php
/*Дано некоторое слово:

'abcba'
Проверьте, что это слово читается одинаково с любой стороны.*/ 
$z = "abcba";
$h = mb_str_split($z);
$k = 1;
for ($i = 0; $i<count($h); $i++)
{
    if ($h[$i] == $h[count($h)-$k])
	{
		if ($k > count($h)/2)
		{
			break;
		}
		else
		{
		continue;
		}
	} 
	$k++;
}
if ($k > count($h)/2)
{
	echo "yos";
}
else 
{
	echo "niou";	
}//??????