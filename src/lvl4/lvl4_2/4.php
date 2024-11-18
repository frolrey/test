<?php
//Сделайте функцию, которая параметром будет год и проверять, високосный он или нет.
//function LeapYear():string
//{
//    $targetDate = (new DateTime('now'));
//    echo $targetDate->format('Y-m-d')."<br>";
////        echo $targetDate->format('Y-m-d')."<br>";
//        if ($targetDate->format('L')) {
//           echo $k = $targetDate->format('Y-m-d')."<br>";
//        }
////        echo $targetDate->format('Y-m-d')."<br>";
//    echo $targetDate->format('Y-m-d')."<br>";
//    return '';
//}
function isLeapYear(string $year)
{
    $year = new DateTime($year);
    return $year->format('L') ? "true" : "false";
}
$year = new DateTime('now');
$year = (string)$year->format('Y');
echo isleapYear($year);
