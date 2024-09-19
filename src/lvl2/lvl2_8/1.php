<?php
//Дана строка с буквами. Проверьте, что в этой строке не более двух заглавных букв.
$z = "oijfgnbndfbKJSDJK";
$h = mb_str_split($z);
$count = 0;
foreach ($h as $value)
{
	$blya = ord($value);
    if (($blya>=65)and($blya<=90))
	{
        $count++;
	}
}
echo "В строке нахуй ".$count." заглавных букв";
if ($count>2)
{
	echo "<br>"."говно";
}
else {
	echo "<br>"."заебись";
}