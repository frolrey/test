<?php
//Дан массив со числами. Удалите из него числа, имеющие два и более нуля.
$z = range(0,30000,50);
foreach ($z as $k => $x) {
    if ((str_contains(strval($x), '00')) || (preg_match('/0(\d)0/', strval($x))) || (preg_match('/0(\d)(\d)0/', strval($x)))) {
        unset($z[$k]);
    }
}
echo "<pre>";
print_r($z);