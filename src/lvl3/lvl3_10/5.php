<?php
//Дан массив со числами. Оставьте в нем числа, состоящие из разных цифр, а остальные удалите.
$z = [30, 33, 66, 91, 77, 89];
//foreach ($z as $k1 => $z1) {
//      $z2 = mb_str_split((string)($z1));
//      $z3 = array_filter($z2, fn($p,$k)=> $p === $z2[$k]);
//    foreach ($z2 as $k2 => $z22) {
//        if ($z22 == $z2[$k2+1]) {
//            if ($k2+1 >= count($z2)) {
//                break;
//            }
//            else {
//                unset($z[$k1]);
//            }
//        }
//    }

echo "<pre>";
print_r(array_filter
($z,fn($v)=>strlen($v)===count(array_unique(str_split($v)))));
// как предотвратить ошибку выхода за рамки массива

