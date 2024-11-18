<?php
//Сделайте функцию, которая вернет предыдущий, текущий и следующий дни недели словом в виде следующего массива:[
//	'next' => 'пн',
//	'curr' => 'вс',
//	'prev' => 'сб',
//]
function DaysInRange():array
{
    $k = ['next'=>'','curr'=>'','prev'=>''];
    $date = new DateTime('now');
    $k['curr'] = $date->format('D');
    $k['next'] = $date->modify('+1 day')->format('D');
    $k['prev'] = $date->modify('+5 day')->format('D');
    return $k;
}
echo "<pre>";
print_r(DaysInRange());