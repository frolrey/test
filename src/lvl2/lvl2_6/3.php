<?php
/*Дана некоторая строка с числом:

'1234567'
Отделите тройки цифр пробелами, начиная с конца числа. В нашем случае должно получится следующее:

'1 234 567'*/
$z = "1234567";
$h = number_format($z, 0, " ", " ");
echo ($h);