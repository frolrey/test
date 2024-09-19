<?php
/*Дана некоторая строка:

'abcdefg'
Удалите из этой строки каждый третий символ. В нашем случае должно получится следующее:

'abdeg'*/
echo "<pre>".$z = "abcdefg";
$h = mb_str_split($z);
$count = 0; 
for($i = 0; $i < count($h); $i++)
{
	$count++;
	if ($count % 3 == 0)
	{
        unset($h[$i]);
	}
}
echo "<br>";
$j = implode("", $h);
print_r($j);