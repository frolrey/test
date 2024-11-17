<?php
//Дан массив со числами. Удалите из него числа, имеющие два и более нуля.
$z = range(0,30000,50);
shuffle($z);
//foreach ($z as $k => $x) {
//    if ((str_contains((string)($x), '00')) || (preg_match('/0(\d)0/', (string)($x))) || (preg_match('/0(\d)(\d)0/', (string)($x)))) {
//        unset($z[$k]);
//    }
//}
$p = 0;
array_filter($z, function ($hui, $p){
        if (in_array('0', mb_str_split($hui))){
            $p++;
        if ($p >= 2){
            return true;
        }
            $p = 0;
        return false;
});
echo "<pre>";
print_r($z);