<?php
//Сделайте функцию, которая параметром будет принимать массив и удалять из него все дубли.
function Uni(array $k):array
{
    $p = [];
    foreach ($k as $v) {
        foreach ($k as $v1) {
            if (($v != $v1) && (!in_array($v, $p))) {
                $p[] = $v;
            }
        }
    }
    return $p;
}
$k = [4, 5, 6, 7, 8, 9, 10, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
print_r(Uni($k));
//$pencil = [1,2,3];
//foreach ($pencil as $value) {
//    foreach ($pencil as $value1) {
//        echo $value1;
//    }
//    echo ' '.$value.'<br>';
//}