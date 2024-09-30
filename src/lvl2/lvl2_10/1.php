<?php
//Дана строка с буквами и цифрами. Проверьте, что в этой строке не более трех букв.
$z = "839489125asdf3891458918as";
$v = mb_str_split($z);
$count = 0;
foreach($v as $key => $value)
{
	$g = ord($value);
	if ((($g>=65)and($g<=90)) or (($g>=97)and($g<=122)))
	{
		$count++;
	}
}
if ($count >= 3)
{
	echo "pedik";
}
else{
	echo "pidor";
}