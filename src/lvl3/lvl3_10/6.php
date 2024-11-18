<?php
// Дан массив:
//[
//	[1, 2, 3],
//	[4, 5, 6],
//	[7, 8, 9],
//]
//
//Слейте элементы этого массива в один одномерный массив:
//[1, 2, 3, 4, 5, 6, 7, 8, 9]
$z = [
    [[1, [1, 2, 3], 3], [1, 2, 3, 7, 8], 3],
    [4, [1, [1, 2, 3, 6], 3], 6],
    [7, 8, 9],
];
$zz = [];
function flattenArray(array $z): array {
    return array_merge([], ...array_map(fn($item) => is_array($item) ? flattenArray($item) : [$item], $z));
}

$a = flattenArray($z);

echo '<pre>';
print_r($a);
//$zz = array_merge($z[0],$z[1],$z[2]);
