<?php
//Дана переменная со строкой. Проверьте, что в эта строка представляет собой число, то есть состоит только из цифр.
function WhatIsIt(string $str):string
{
    $p = str_split($str);
    $k = 0;
    foreach ($p as $v) {
        if (preg_match('/[^0-9]/',$v)) {
            $k++;
            break;
        }
    }
    return $k === 0 ? "число" : "не число";
}
$str = '183258717';
echo WhatIsIt($str);
