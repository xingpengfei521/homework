<?php 
	#至少一个参数.
	// echo date();

	// echo date('d');//day号
	// echo date('m');//month月
	// echo date('y');//year年小写是17大写是2017
	// echo date('l');//day of week星期几
	// echo date('Y/m/d');//格式化输出年月日
	// echo date('m-d-Y');//格式化输出年月日
	// echo date('h');//hour时
	// echo date('i');//minute分
	// echo date('s');//seconds秒
	// echo date('a');//am or pm 上午

	#设置时区
	// date_default_timezone_get("Asia/Shanghai");
	// date_default_timezone_get("Etc/GMT-8");
	// echo "<hr>";
	// echo date("h:i:sa");
	#时间酇
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp;
	echo "<hr>";
	echo date('m/d/Y h:i:sa',$timestamp);//转化时间戳为日期
	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 24 2017");
	echo "<hr>";
	echo $timestamp2;
	echo "<hr>";
	echo date('m/d/Y h:i:sa',$timestamp2);
	$timestamp3 = strtotime("tomorrow");
	echo "<hr>";
	echo date('m/d/Y h:i:sa',$timestamp3);
	$timestamp4 = strtotime("next Sunday");
	echo "<hr>";
	echo date('m/d/Y h:i:sa',$timestamp4);
	$timestamp5 = strtotime("+2 Days");
	echo "<hr>";
	echo date('m/d/Y h:i:sa',$timestamp5);
	









 ?>