<?php
//Дано слово. Получите его последнюю букву. Если слово заканчивается на мягкий знак, то получите предпоследнюю букву.
$s = "Че за пидор на моем рабочем месте";
$z = mb_str_split($s);
echo $z[count($z)-1] == "ь" ? $z[count($z)-2] : $z[count($z)-1];