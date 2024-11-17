<?php
//Найдите все числа от 1 до 1000, сумма цифр которых равна 13.
$z = range(1, 1000);
$k = 0;
foreach ($z as $j => $x) {
    $y = mb_str_split($x);
    foreach ($y as $y1) {
        $k += $y1;
    }
    echo $k === 13 ? $x."<br>" : null;
    $k = 0;
}
