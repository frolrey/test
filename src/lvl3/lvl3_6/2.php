<?php
//Дано число, например, вот такое:
//
//$num = 12345;
//Проверьте, что все цифры этого числа больше нуля.
$num = 12345;
echo "<pre>";
echo $num."<br>";
$str = mb_str_split($num);
foreach ($str as $k => $v) {
    echo $v > 0 ? "yos"."<br>" : "nah"."<br>";
}