<?php
//Дана некоторая строка. Найдите позицию третьего нуля в строке.
echo $z = "Че за пид0р на м0ем раб0чем месте";
$v=[];
$h = mb_str_split($z);
		foreach($h as $key=>$value)
        {
            if ($value==="0")
            {
                $v[] = $key;
            }
        }
echo "<br>"."Позиция нуля ".stripos($z, "0");
print_r($v);
// echo "<pre>";
// $suka = [0 => "pedik", 1 => "tvar"];
// print_r($suka);