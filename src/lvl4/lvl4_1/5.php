<?php
//Сделайте функцию, которая параметром будет получать дату, а возвращать знак зодиака, соответствующий этой дате.
function getZodiacSign($date) {
    $dateTime = new DateTime($date);


    $month = (int)$dateTime->format('m');
    $day = (int)$dateTime->format('d');

    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return 'Водолей';
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return 'Рыбы';
    } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return 'Овен';
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return 'Телец';
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return 'Близнецы';
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return 'Рак';
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return 'Лев';
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return 'Дева';
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return 'Весы';
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return 'Скорпион';
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return 'Стрелец';
    } else {
        return 'Козерог';
    }
}

$date = '1990-04-15';
$zodiacSign = getZodiacSign($date);
echo "Знак зодиака для даты {$date}: {$zodiacSign}";
