<?php
//Сделайте функцию, которая параметром будет принимать дату в формате год-месяц-день, и определять, существует ли такая дата или нет.
function IsDateTrue($targetDate):bool
{
    if (((int)$targetDate->format('m')>12) ||
    ((int)$targetDate->format('d')>31) ||
    ((int)$targetDate->format('m')<0) ||
    ((int)$targetDate->format('d')<0)) {
        return false;
    }
    else{
        return true;
    }
}
$targetDate = new DateTime('now');
echo IsDateTrue($targetDate) ? "Выбранная дата верная" : "Выбранная дата не существует";
// БЛЯТЬ ЧЕ ЗА ХУЙНЯ