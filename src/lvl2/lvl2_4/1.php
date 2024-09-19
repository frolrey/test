<?php
//Дана некоторая строка с буквами и цифрами. Получите позицию первой цифры в этой строке.
echo $jeff = "a5bcd1asd3";
$pidoras = mb_str_split($jeff);
    foreach($pidoras as $key=>$value)
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
                echo "<br>"."Позиция числа ".$key;
				break;
            }
        }
