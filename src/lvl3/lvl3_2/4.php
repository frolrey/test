<?php
/*Дана некоторая строка со словами:

'aaa bbb ccc eee fff'
Удалите из этой строки каждое второе слово. В нашем случае должно получится следующее:

'aaa ccc fff'*/ 
$z = "aaa bbb ccc eee fff";
$g = explode(" ", $z);
$h = 0;
for ($i=0; $i<count($g); $i++)
{
	$h++;
    if($h == 2)
	{
		unset($g[$i]);
		$h = 0;
	}
}
echo implode(" ", $g);