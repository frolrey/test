<?php
//Сделайте функцию, которая параметром будет принимать число, а количество его делителей.
function DelsCount(int $z):int{
    $p = [];
    for($i = 1; $i <= $z; $i++){
        if ($z % $i === 0){
            $p[] = $i;
        }
    }
    echo "<pre>";
    print_r($p);
    return count($p);
}
$z = 35;
echo "<br>"."Количество делителей ".DelsCount($z);