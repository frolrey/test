<?php
//Дана некоторая строка. Переберите и выведите в консоль по очереди все символы с конца строки.
$s = "Че за пидор на моем рабочем месте";
echo $s;
$f = mb_str_split ($s);
echo "<pre>";
var_dump(array_reverse($f)); //как мне сделать из этого строку типо "етсем..."

