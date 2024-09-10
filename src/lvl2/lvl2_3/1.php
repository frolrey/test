<?php
//Даны два слова. Проверьте, что последняя буква первого слова совпадает с первой буквой второго слова.
$suka = "пидор";
$pidor = "сука";
$a = mb_str_split($suka);
$b = mb_str_split($pidor);
if ($a[count($a)-1] === $b[0])
{
    echo "da"; 
}
else {
	echo "net";
}
