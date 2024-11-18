<?php
//Сделайте функцию, которая вернет текущий день недели словом.
$z = ['Sunday', 'Monday','Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
echo 'Сегодня '.$z[date('w')];