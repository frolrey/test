<?php
//Дана переменная со строкой. Проверьте, что в эта строка представляет собой дробь.
function IsFraction(string $str): int
{
    $p = str_split($str);
    $k = 0;
    foreach ($p as $v) {
        if ((preg_match('/#[0-9]#/', $v))&&(preg_match('/[/,]/', $v))&&(preg_match('/#[0-9]#/', $v))) {
            $k++;
        }
    }
    return $k;
}
$str = '3/9';
echo IsFraction($str);
//?? как