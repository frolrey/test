<?php
//Дана строка со словами. Отсортируйте слова в алфавитном порядке.
$z = "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod";
$k = explode(' ', $z);
asort($k);
echo "<pre>";
print_r($k);
// какого хуя не учитывается первое слово в сортировке