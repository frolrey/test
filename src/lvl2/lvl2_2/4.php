<?php
//Дана некоторая строка. Найдите позицию первого нуля в строке.
echo $z = "Че за пид0р на моем рабочем месте";
$h = mb_str_split($z);
echo "<br>".array_search(0, $h)+1;