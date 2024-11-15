<?php
//Дан текст со словами. Запишите в массив все слова, начинающиеся на букву 'a'.
$z = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus beatae explicabo illum deleniti odio, accusantium dicta debitis nam id voluptatem consectetur est expedita omnis tempora labore! Magnam expedita rem facere ipsam suscipit possimus obcaecati a hic iure tenetur? Repellat officiis consequuntur nam saepe, voluptatibus magni. Numquam placeat hic ducimus nemo ipsam obcaecati voluptatum tenetur quis architecto alias veniam assumenda nihil neque cum, consectetur ipsa accusantium id non? Nam totam reprehenderit quasi animi. Voluptatum officia consectetur ea ipsa, cupiditate veritatis numquam? Fugiat quisquam aperiam nesciunt odit veniam! Modi reiciendis incidunt vel cumque, ducimus autem harum, alias repellat dicta nulla est! Sit!';
$h = explode(' ', $z);
$v = [];
foreach($h as $key => $value)
{
	if (str_starts_with($value, 'a'))
	{
        $v[]=$value;
	}
}
echo "<pre>";
print_r($v);