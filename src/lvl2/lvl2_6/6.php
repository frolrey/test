<?php
/*Дана некоторая строка со словами:

'aaa bbb ccc eee fff'
Сделайте заглавным первый символ каждого второго слова в этой строке. В нашем случае должно получится следующее:

'aaa Bbb ccc Eee fff'*/
$z = "aaa bbb ccc eee fff";
$h = explode(" ", $z);
$count = 0;
for ($i=0; $i<count($h); $i++)
{
    $count++;
	if($count % 2 == 0)
	{
		$h[$i]= ucfirst($h[$i]);
	}
}
echo "<pre>";
print_r($h);