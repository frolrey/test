<?php
//Сделайте функцию, которая заполнит массив N случайными числами из заданного промежутка.
function RandomArray(array $N){
    $z = range(1, 20);
    foreach($z as $Z){
        $N[] = array_rand($z, 1);
    }
    return $N;
}
$N = [];
echo '<pre>';
print_r(RandomArray($N));