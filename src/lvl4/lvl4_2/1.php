<?php
//Сделайте функцию, которая параметром будет принимать число и удалять из него нули.
//function NoZeros($num){
//    return array_filter(str_split((string)$num), fn($v)=>$v !== '0');
//}
$num = 100;
echo "<pre>";
print_r(array_filter(str_split((string)$num), fn($v)=>$v !== '0'));