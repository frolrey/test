<?php
//Дан массив со числами. Удалите из него числа, состоящие более чем из трех цифр.
$z = range(1,2000,50);
foreach ($z as $key => $x) {
    $val = strlen((string)($x));
    if ($val > 3) {
        unset($z[$key]);
    }
}
echo "<pre>";
print_r($z);