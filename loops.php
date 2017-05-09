<?php 
	#循环 ,根据目中条件重复执行某种代码
	/*
	for
	while
	Do...while
	foreach


	*/
	#for
	#@params-init 初始化,conditions条件,inc 自曾子建
	// for($i=0;$i<10;$i++){
	// 	echo "$i<br>";
	// }

	#while
	#params-conditions
	// $i=0;
	// while($i<10){
	// 	echo "$i<br>";
	// 	$i++;
	// }
	#问:知道循环条件的时候用for  不知道的时候用while


	#Do....while
	#params-conditions
	// $i=0;
	// do{
	// 	echo "$i<br>";
	// }
	// while($i<10)



	#foreach下标数组
	#as后面的变量接收前面as的值
	// $people = ["heade","make","pig"];
	// foreach ($people as $person) {
	// 	echo "$person<br>";
	// }

	#foreach 关联数组
	// $people = ["heade"=>"45646@qq.com","make"=>"77879@qq.com","pig"=>"123123@qq.com"];
	// foreach ($people as $person => $qq) {
	// 	echo "$person : $qq<br>";
	// }



	#打印1-100之间的7的倍数
	for ($i=1; $i < 100; $i++) { 
		if($i%7 == 0){
			echo "$i<br>";
		}
	}


	#打印1-100之间个为7的数
	for ($i=1; $i < 100; $i++) { 
		if($i%10 == 7){
			echo "$i<br>";
		}
	}

	#打印1-100之间十位为7的数

	for ($i=1; $i <100 ; $i++) { 
		if(intval($i%100/10)==7){
			echo "$i<br>";
		}
	}






 ?>