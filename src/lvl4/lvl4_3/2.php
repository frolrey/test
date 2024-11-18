<?php
//Сделайте функцию, которая параметром будет принимать массив и удалять из него все дубли, которые встречаются больше трех раз.
function Uni(array $k):array
{
    $count = 0;
    $p = [];
    foreach ($k as $v) {
        foreach ($k as $v1) {
            if (($v == $v1) && (!in_array($v, $p))) {
                if ($count > 3){
                    echo $count;
                    continue;
                }
                else{
                    $count++;
                    $p[] = $v;
                }
            }
        }
        $count=0;
    }
    return $p;
}
$k = [4, 5, 6, 7, 8, 9, 10, 4, 5, 6, 7, 8, 9, 10, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
print_r(Uni($k));