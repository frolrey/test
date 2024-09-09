<?php
//12345 - сумма цифр числа
$b = 12345;
echo $s = array_sum(mb_str_split($b));


//ИЛИ
$s = mb_str_split($b);
$v = 0;
for ($i=0; $i<count($s); $i++)
{
$v+=$s[$i];
}
echo "<br>".$v;