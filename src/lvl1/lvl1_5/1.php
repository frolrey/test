<?php
//Найдите сумму всех целых чисел от 1 до 100.
/*$s=0;     
for ($i=1; $i<=100; $i++)
{
 $s=$s+$i;                         !!!!!!!!!!!!!ПИДОРСТВО!!!!!!!!!!!!!
}
echo "Сумма чисел от 1 до 100 равна ";
echo $s;
echo ".\n";*/
$z = range(1,100); 
echo $f = array_sum($z);
