<?php
//Дано число. Получите массив позицией всех цифр 3 в этом числе, за исключением первой и последней.
$num = 31239848903230893;
$z = mb_str_split((string)($num));
$k = array_keys($z, 3);
unset($k[0]);
unset($k[count($k)]);
echo "<pre>";
print_r($k);
print_r(
    array_slice(
        array_keys(
            array_filter(
                str_split($num), fn($item)=>$item==3)),
                1,-1));