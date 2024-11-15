<?php
//Выведите в консоль все числа в промежутке от 10 до 1000, у которых первая цифра четная.
$z = range(10,1000);
foreach($z as $value)
{
	$g = mb_str_split(strval($value));
    if ($g[0] % 2 == 0)
	{
        echo $value."<br>";
	}
}
