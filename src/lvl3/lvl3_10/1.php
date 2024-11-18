<?php
//Дан массив. Сделайте так, чтобы в нем каждый элемент повторился два раза.
$z = range(1,10);
shuffle($z);
foreach ($z as $x) {
    $z[] = $x;
}
echo "<pre>";
print_r($z);