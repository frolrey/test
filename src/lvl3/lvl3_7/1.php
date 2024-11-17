<?php
//Дана строка со словами. Отсортируйте слова в алфавитном порядке.
$z = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod";
$k = explode(' ', $z);
sort($k);
echo "<pre>";
print_r($k);
// какого хуя не учитывается первое слово в сортировке