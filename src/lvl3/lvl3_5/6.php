<?php
//Напишите программу, которая сформирует следующую строку:
//
//'-1-2-3-4-5-'
$z = '';
$k = 5;
echo "<pre>";
for ($i = 1; $i <= $k; $i++) {
    echo '-'.$i;
}
echo "-";