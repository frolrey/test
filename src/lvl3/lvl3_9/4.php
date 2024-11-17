<?php
//Найдите все числа от 1 до 1000, сумма цифр которых равна 13.
$z = range(1, 1000);
$k = 0;
foreach ($z as $j => $x) {
    $y = mb_str_split($x);
    for($i=0; $i<count($y); $i++){
        $k += $y[$i];
    }
    echo $k == 13 ? $x."<br>" : null;
    $k = 0;
}
