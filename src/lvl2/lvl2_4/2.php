<?php
//Дан объект с ключами и значениями. Запишите в первый массив ключи объекта, а во второй - значения.
class uebok
{
	public $name, $age, $isgay; 
}
$person = new uebok();
$person->name = "Саня";
$person->age = 23;
$person->isgay = true;
$m = [];
$m[] = $person -> name;
$m[] = $person -> age;
$m[] = $person -> isgay;
$j = [];
$j[] -> name;
$j[] -> age;
$j[] -> isgay;
echo "<pre>";
print_r($person);
print_r($m);
print_r($j);//???????????????????????????????????????/