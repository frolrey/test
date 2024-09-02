<?php
//Выведите в консоль все целые числа от 100 до 1.
function suka()
{
	for ($i=100; $i>=1; $i--)
	{
		yield $i;
	}
}
foreach(suka() as $pidor)
{
	echo "<br>".$pidor;
}