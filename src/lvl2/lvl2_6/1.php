<?php
//Дана некоторая строка с буквами и цифрами. Получите массив позиций всех цифр из этой строки.
$z = "94t7yhwejnkhoiu23rty981u0-2ipofj";
$h = mb_str_split($z);
$k =[];
    foreach($h as $key=>$value)
        {
            if ($value=="1" or 
			$value=="2" or 
			$value=="3" or 
			$value=="4" or
			$value=="5" or
			$value=="6" or
			$value=="7" or
			$value=="8" or
			$value=="9" or
			$value=="0")
            {
                $k[]=$key;
            }
        }
echo "<pre>";
print_r ($k);
