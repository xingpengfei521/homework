<?php 
	#创建一个数组
	$val = array(1,6,2,3,4,5,8);
	#使用数组方法,将内容添加都上面数组中.
	array_push($val, 99);
	print_r($val);
	#创建一个无序数组,时候用数组方法,让数组排序
	$val = array(7,6,2,3,4,5,8);
	asort($val);
	foreach ($val as $values) {
		echo $values;
	}
	#创建一个关联数组,让关联数组排序(倒叙)
	$first = array(3 => "bobo",4=>"nanyang",9=>"mengxing",6=>"fange" );
	ksort($first);
	print_r($first);
	
	#创建一个数组,将数组转化为字符串
	$array = array("hello","world");
	$string = implode(',', $array);
	echo $string;
	#创建一个字符串,将字符串转为数组.

	$string = "heell world";
	$array = explode(',', $string);
	var_dump($array);
	

 ?>