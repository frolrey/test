<?php
//Сделайте функцию, которая вернет массив всех високосных годов за предыдущие сто лет.
function LeapYear():array
{
    $k = [];
    $targetDate = (new DateTime('now'))->modify('-100 years');
    echo $targetDate->format('Y-m-d')."<br>";
    for ($i=0; $i<100; $i++){
//        echo $targetDate->format('Y-m-d')."<br>";
        if ($targetDate->modify('+1 year')->format('L')){
            $k[] = $targetDate->format('Y-m-d');
        }
//        echo $targetDate->format('Y-m-d')."<br>";
    }
    echo $targetDate->format('Y-m-d')."<br>";
    return $k;
}
echo "<pre>";
print_r(LeapYear());