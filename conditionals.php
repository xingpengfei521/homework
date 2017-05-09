<?php 
	#条件 分支-if -switch
	#关系运算符
	/*
	=== == != !== > <  >= <=

	*/
	// $num = 4;
	// if($num<5){
	// 	echo "$num 确实小于 5";
	// }
	// else if($num>=4){
	// 	echo "$num 确实大于 4";
	// }else{
	// 	echo "wtf!";
	// };

	#Nesting if 嵌套
	// $number = 6;
	// if($number>4){
	// 	if($number<10){
	// 		echo "$number 大于4 ,并且小于10";
	// 	}else{
	// 		echo "whatever";
	// 	}
	// }

	#逻辑运算符logic
	/*
		AND &&左右俩边都为真才为真
		XOR 左右俩边都为真的情况下为假  ,一个为真 则为真.左右俩边都为假的情况下为假 
		OR || 左右俩边一个为真即为真
	*/
	// $num = 6;
	// if($num>4 AND $num<10){
	// 	echo "$num 大于4 ,并且小于10";
	// }

	#在PHP中&& || 都是直接返回ture//false
	$num = 6;
	if($num>4 XOR $num<10){
		echo "$num 大于4 ,并且小于10";
	}

	#switch   在php中判断数==
	$favColor = 5;
	switch ($favColor) {
		case "5":
			echo "你最喜欢的颜色是 $favColor";
			break;
		case 'blue':
			echo "你最喜欢的颜色是 $favColor";
			break;
		case 'green':
			echo "你最喜欢的颜色是 $favColor";
			break;
		case 'pink':
			echo "你最喜欢的颜色是 $favColor";
			break;
		default:
			echo "没有你喜欢的颜色";
			break;
	}





 ?>