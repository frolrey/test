<?php
//Сделайте функцию, которая параметром будет принимать число и удалять из него четные цифры.
function DeleteEvens(int $z):array{
    return array_filter(str_split($z), fn($x)=>$x % 2 !== 0);
}
$z = 356892;
echo implode('', DeleteEvens($z));