<?php
//Сделайте функцию, которая будет возвращать сколько дней прошло или осталось до заданной даты в году, в зависимости от того, была уже эта дата или нет.
function DayToDay(string $targetDate) {
    $date = new DateTime('now');
    $targetDate = new DateTime($targetDate);
    echo $targetDate->format('d.m.Y')."<br>";
   // echo $date->format('Y-m-d')."<br>";
    echo $targetDate->diff($date)->y;
    echo "<br>".(int)$date->format('Y');
    echo "<br>".(int)$targetDate->format('Y');
    return (int)$date->format('Y')-(int)$targetDate->format('Y') < 0 ?
        "<br>".$date->format('Y')." год раньше заданного ".$targetDate->format('Y') :
        "<br>".$date->format('Y')." год позже заданного ".$targetDate->format('Y');
}
echo DayToDay('20.12.1488');