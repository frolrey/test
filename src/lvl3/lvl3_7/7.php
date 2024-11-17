<?php
//Дана строка. Удалите из нее все гласные буквы.
echo $z = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod"."<br>";
$j = mb_str_split($z);
$jj = ['a','e','i','o','u','A','E','I','O','U'];
    foreach ($j as $p => $k){
//        if (in_array($k, $jj)){
//            unset($j[$p]);
//        }
        foreach ($jj as $jj1){
            if ($k == $jj1){
                unset($j[$p]);
            }
        }
    }
echo implode("", $j);