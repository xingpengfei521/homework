<?php 
	#函数function可被重复利用的代码块
	/*
		Camel case:驼峰命名法
		Pascle case:大驼峰命名
		lower case: 连写命名法
	*/
	#定义一个函数
		// function simpleFunction(){
		// 	echo "hello world";
		// }

		// #调用函数
		// simpleFunction();

	#代参函数
	// function sayHello($name){
	// 	echo "hello $name";
	// }

	// sayHello("herey");
	// function sayHello($name="herey"){
	// 	echo "hello $name";
	// }

	// sayHello();
	#返回值函数
	// function addNumbers($num1,$num2){
	// 	echo $num1+$num2;
	// }
	// addNumbers(2,3);
	// function addNumbers($num1,$num2){
	// 	return $num1+$num2;
	// }
	// echo addNumbers(2,3);
	#函数传引用
	$myNumber = 10;
	function addFive($num){
		$num+=5;

	}
	addFive($myNumber);
	function addTen($num){
		$num+=10;
	}
	addTen($myNumber);
	echo "Value:$myNumber</br>";
	#&在函数里面是取地址符.


 ?>