<?php 
	#array 数组是多个存储数值的容器
	/*
	下标数组
	关联数组

	*/
	#下边数组
	// $people = array("hern","funck","neet");
	// echo "$people[1]";


	#
	// $ids = array(23,25,55);
	// echo "$ids[0]";

	// $cars = ["asdsd","adsda","werw"];
	// $cars[3] = "bence";
	// $cars[] = "pppp";
	#计算数组的个数
	// echo count($cars);

	#数组输出方法
	// print_r($cars);

	#万能输出方法 for anything...
	// var_dump($cars);




	/*
	关联数组的注意事项:1.如果关联的key值是字符串那么再添加一个没有key值得数据那么会自动从下边为0的开始配置
	2.如果关联key的值是数值,那么在添加一个没有key值得数据时,会自动在前一个数值的基础上加一/

	*/
	#关联数组
	$people = array("henry"=>35,"bunk"=>30,"email"=>25);

	#echo $people["email"];

	$ids = [22=>"henry",30=>"bunk",20=>"email"];

	#echo $ids[22];
	#添加关联数组
	$ids[] = "elyse";
	#echo $ids[55];
	print_r($ids);

	var_dump($ids);

	#多维数组
	$cars = array(array("heade",10,20),array("make",50,20),array("pig",100,60));
	echo $cars[1][1];




 ?>