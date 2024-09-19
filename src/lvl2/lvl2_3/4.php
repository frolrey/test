<?php
/*Дана дата в следующем формате:

'2025-12-31'
Преобразуйте эту дату в следующий массив:

[
	'year'  => '2025',
	'month' => '12',
	'day'   => '31',
]*/
$penis = "2025-12-31";
$pencil = explode("-", $penis);
$date = ["year", "month", "day"];
echo "<pre>";
print_r(array_combine($date, $pencil));

// foreach ($date as $key => $value) {
// 	$value = $pencil[];
// 	echo "<pre>";
// 	echo "$key - $value";
// }
