<?php
/*Дана некоторая строка:

'abcde abcde abcde'
Замените в ней первый символ каждого слова на '!':

'!bcde !bcde !bcde'*/
$z = "abcde abcde abcde";
echo str_replace("a", "!", $z);