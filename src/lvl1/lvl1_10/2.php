<?php
/*Дано некоторое число:

12345
Выведите в консоль все его символы с конца.*/
$z = 12345;
$ss = str_split($z);
echo implode("", array_reverse($ss));