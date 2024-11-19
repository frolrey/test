<?php
//Сделайте функцию, которая заполнит массив случайными латинскими буквами.
function RandomLetters(array $p):array{
    $alph = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < count(str_split($alph)); $i++) {
        $p[] = $alph[rand(0, strlen($alph) - 1)];
    }
    return $p;
}
$p = [];
echo '<pre>';
print_r(RandomLetters($p));