<?php
//Перевернуть 12345
$s = 12345;
$ss = str_split($s);
echo implode("", array_reverse($ss));	