<?php
/*Дан некоторый массив, например, вот такой:

[1, 2, 3, 4, 5, 6]
Поменяйте местами пары элементов этого массива:

[2, 1, 4, 3, 6, 5] */
$z = range(1,6);
for ($i=0; $i<count($z)-1; $i+=2)
{
    $temp = $z[$i];
    $z[$i] = $z[$i + 1];
    $z[$i + 1] = $temp;
}
echo "<pre>";
print_r($z);