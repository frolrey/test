<?php
//Сделайте функцию, которая будет возвращать сколько дней осталось до конца текущего месяца.
function DayCountToEnd()
{
    $date = new DateTime('now');
    $currentDay = (int)$date->format('d');
    $DaysInMonth = (int)$date->format('t');
    return $DaysInMonth - $currentDay;
}
echo DayCountToEnd();