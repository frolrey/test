<?php
//Сделайте функцию, которая параметром будет принимать число и строку и обрезать эту строку до длины, заданной первым параметром.
function CutString(int $len,string $str):string
{
    return implode('', array_slice(mb_str_split($str),5,$len));
}
$len = 2;
echo $str = "Lorem_ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod"."<br>";
echo CutString($len,$str);