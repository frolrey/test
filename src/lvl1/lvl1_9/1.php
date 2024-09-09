<?php
//Дан массив со строками. Оставьте в этом массиве только те строки, которые начинаются на http://.
/*function pedik($v)
{
	global $i, $j;
	for($i=0; $i<count($v); $i++)
	{
		$g = str_starts_with ($v[$i], "http://");
		echo "<pre>";
		if ($g==1)
		{
            $j++;
		}
	}
	return $j;
}
$v = array("ldfhjd", "Че за пидор на моем рабочем месте", "http://a", "http://", "dejkgdsj");
$h = pedik($v);
var_dump(array_slice($v, -$j, $h));*/

$v = array("ldfhjd", "Че за пидор на моем рабочем месте", "http://a", "http://", "dejkgdsj");
print_r(preg_grep("/http:\/\//", $v));