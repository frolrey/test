<?php
//Выведите в консоль все числа кратные трем в промежутке от 1 до 100.
function suka()
{
	for ($i=1; $i<=100; $i++)
	{
		yield $i;
	}
}
foreach(suka() as $pidor)
{
	echo $pidor % 3 == 0 ? "<br>".$pidor : "";
}