<?php
//	Дан массив со строками. Оставьте в этом массиве только те строки, которые заканчиваются на .html.
$v = array("ldfhjd", "Че за пидор на моем рабочем месте.html", "http://a", "http://", "dejkgdsj.html");
print_r(preg_grep("/.html/", $v));