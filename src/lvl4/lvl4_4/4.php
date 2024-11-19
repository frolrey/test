<?php
//Сделайте функцию, которая параметром будет принимать число и проверять, простое оно или нет.
function SimpleNum($num):bool{
    $p = [];
    for($i = 1; $i < $num; $i++){
        if ($num % $i === 0){
            $p[] = $i;
        }
    }
    return count($p) <= 2;
}
$num = 35;
echo SimpleNum($num) ? "число простое" : "число не простое";