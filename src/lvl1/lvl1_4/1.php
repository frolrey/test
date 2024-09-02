<?php
//Выведите в консоль все целые числа от 1 до 100.
function suka()
{
	for ($i=0; $i<=100; $i++)
	{
		yield $i;
	}
}
foreach(suka() as $pidor)
{
	echo "<br>".$pidor;
}