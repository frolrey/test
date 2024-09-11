<?php
/*Дан некоторый массив, например, вот такой:

[1, 2, 3, 4, 5, 6]
По очереди выведите в консоль подмассивы из двух элементов нашего массива*/
$z = range(1,6);
echo "<pre>";
print_r(array_chunk($z, 2));
/*for ($i=0; $i<count($z); $i++)
{
	if ($i % 2 == 0)
	{
		echo "<pre>";
		var_dump(array_chunk($z, 2));
	}
}*/
$start = 0;
$count = [];
for ($j=0; $j<count($z); $j+=2) 
{
	if ($start > count($z)-1)
	{
		break;
	}
	$v = [];
	for ($i=$start; $i<$start+2; $i++)
	{
		$v[] = $z[$i];
	}
	$count[] = $v;
	$start+=2;
	// echo "<pre>";
	// print_r($v);
}
print_r($count);
// $k = [["suka", 9],[7, 10, "snsk"],[5, "dfkg", true], "dolbaeb"];
// $k[2][] = [];
// $k[2][count($k[2])-1][] = [];
// print_r($k);
