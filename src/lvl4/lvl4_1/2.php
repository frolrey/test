<?php
//Сделайте функцию, которая параметром будет получать дату, а возвращать день недели словом, соответствующий этой дате.
//echo "Текущая дата ".date('d:m:Y')."<br>";
$z = ['Sunday', 'Monday','Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
//echo date('d') > 6 ? "День недели ".$z[date('d') % 7]."<br>" : "День недели ".$z[date('d')];
echo $z[date('w', mktime(0,
    0, 0, 11, 18, 24))];