<?php
/*Дан массив с дробями:

[1.456, 2.125, 3.32, 4.1, 5.34]
Округлите эти дроби до одного знака в дробной части.*/
$z = array(1.456, 2.125, 3.32, 4.1, 5.34);
for($i=0; $i<count($z); $i++)
{
	echo $f = round($z[$i], 1)."<br>"; 
}