
<?php
//Дана строка. Выведите в консоль последний символ строки.
$s = "Че за пидор на моем рабочем месте";
echo $s[0].$s[-1]; //для пидорасов
echo "<br>".mb_substr($s, -1); //для меньших пидорасов
$z = mb_str_split($s);
echo "<pre>";
var_dump($z);
echo $z[count ($z)-1];