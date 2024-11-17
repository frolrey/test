<?php
//Дана строка в формате:
//'kebab-case'
//
//Преобразуйте ее в формат:
//'snake_case'
$z = 'kebab-case';
echo $zz = preg_replace('/(k.+?-)/', 'snake_', $z)."<br>";
echo $zzz = preg_replace('/(s.+?c)/', 'camelC', $zz);
echo $z4 = preg_replace('/(c.+?C)/', 'snake_c', $zzz)."<br>";
//ебать удобно, я же мог все это изучить раньше и потратить меньше времени...
