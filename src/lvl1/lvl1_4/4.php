<?php
//Выведите в консоль все четные числа из промежутка от 1 до 100.
function suka()
{
	for ($i=1; $i<=100; $i++)
	{
		yield $i;
	}
}
foreach(suka() as $pidor)
{
	echo $pidor % 2 == 0 ? "<br>".$pidor : "";
}