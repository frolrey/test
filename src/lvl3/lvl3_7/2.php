<?php
//Дано число. Получите массив делителей этого числа.
$z = 35;
$k = [];
for ($i = 1; $i <= $z; $i++) {
    if ($z % $i == 0) {
        $k[] = $i;
    }
}
echo "<pre>";
print_r($k);