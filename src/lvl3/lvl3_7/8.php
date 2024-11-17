<?php
//Дана строка. Сделайте заглавной последнюю букву каждого слова в этой строке.
//function func1($s)
//{
//    return preg_replace_callback('/b(w+)(w)b/', function ($m) {
//        return $m[1] . strtoupper($m[2]);
//    }, $s);
//}
//$z = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod';
//$zz = func1($z);
//echo $zz;
//сука хоть убей не получается

$z = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod';
$zz = explode(" ", $z);
$l = '';
foreach ($zz as $k => $h) {
    $hh = mb_str_split($h);
    if ($hh[count($hh) - 1] === ',') {
        $hh[count($hh) - 2] = strtoupper($hh[count($hh) - 2]);
    }
    else{
        $hh[count($hh) - 1] = strtoupper($hh[count($hh) - 1]);
    }
    $l .= implode('', $hh)." ";
}
echo $l;


