<?php
//Выведите в консоль все целые числа от -100 до 0.
//сложно пиздец)
function suka()
{
	for ($i=-100; $i<=0; $i++)
	{
		yield $i;
	}
}
foreach(suka() as $pidor)
{
	echo "<br>".$pidor;
}