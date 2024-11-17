<?php
//Дана строка. Удалите из нее все гласные буквы.
echo $z = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod"."<br>";
$j = mb_str_split($z);
unset($j[array_search("a", $j)]);
echo implode("", $j);