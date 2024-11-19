<?php
//Сделайте функцию, которая параметром будет принимать массив с числами и возвращать второе по величине число.
function SecondGreatest(array $a){
    $p = ['first'=> '', 'second'=> ''];
    foreach($a as $v){
        foreach($a as $v1){
            if ($v1 > $v){
                $p['first'] = $v1;
            }
            else {
                $p['second'] = $v1;
            }
        }
    }
    return $p['second'];
}
$a = [1, 4, 5, 3, 7, 10, 9];
echo SecondGreatest($a);