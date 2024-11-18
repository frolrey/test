<?php
//Сделайте функцию, которая параметром будет принимать число и строку и обрезать эту строку до длины, заданной первым параметром.
function CutString($len ,$str)
{
    return substr($str,0,$len);
}
$len = 37;
echo $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod"."<br>";
echo CutString($len,$str);