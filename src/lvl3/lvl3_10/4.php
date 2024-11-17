<?php
//Дано число. Получите массив позицией всех цифр 3 в этом числе, за исключением первой и последней.
$num = 3123984890323089;
$z = mb_str_split(strval($num));
$k = array_keys($z, 3);
unset($k[0]);
unset($k[count($k)-1]);
echo "<pre>";
print_r($k);