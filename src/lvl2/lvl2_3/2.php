<?php
//Дана некоторая строка. Найдите позицию третьего нуля в строке.
echo $z = "Че за пид0р на м0ем раб0чем месте";
for($i=0; $i<3; $i++)
{
     if(str_contains($z, "0") === true)
    {
        $h = mb_str_split($z);
		unset($h[array_search(0, $h)]);
        echo "<br>".implode($h);
    }
}