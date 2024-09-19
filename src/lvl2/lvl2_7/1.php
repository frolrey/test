<?php
/*Дана некоторая строка:

'a bc def ghij'
Переведите в верхний регистр все подстроки, в которых количество букв меньше или равно трем. В нашем случае должно получится следующее:

'A BC DEF ghij'*/
$z = "a bc def ghij";
$h = str_word_count($z, 1);
for($i=0; $i<count($h); $i++)
{
	if (strlen($h[$i])<=3)
	{
		$h[$i] = strtoupper($h[$i]);
	}
}
echo "<pre>";
echo implode (" ", $h);