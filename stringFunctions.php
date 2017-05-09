<?php 
	#string_function:处理字符串的函数
	#返回字符串的一部分
	// $output = substr("hello", 1,3);//第一个参数是字符串,第二个是从什么时候开始截取,第三个是到什么位置结束
	// $output = substr("hello", -2);
	// echo $output;
	// $output = strlen("hello");//获取字符串的长度
	// echo $output;
// $output = stripos("hello world", "o");//第一个参数是查找的字符串,第二个参数是查找字符串里面的第一个字符的下标.
// 	echo $output;
// 	$output = strrpos("hello world", "o");//第一个参数是查找的字符串,第二个参数是查找字符串里面的最后一个字符的下标.
// 	echo $output;

	#去除首尾空格
	// $text = " hello world   ";
	// #var_dump($text);
	// $trimed = trim($text);//去掉首尾空格.
	// var_dump($trimed);
	#讲字符串转换为大小写
	// $output = strtoupper("hello world");
	// echo $output;
	// $output = strtolower("HELLO WORLD");
	// echo $output;
	// #将每个单词首字母大写
	// $output = ucwords("upper case words");
	// echo $output;
	// #替换所有配匹的内容
	// $text = "hello world";
	// $output = str_replace("world", "body", $text);
	// echo $output;
	// #判断是否是字符串
	// $val = "hello";
	// $output = is_string($val);
	// echo $output;
	#过滤掉数组中非字符串的值
	// $val = array(true,false,null,"abc",33,'33',24,4,'22.4',',',' ',0,'0');
	// for ($i=0; $i <count($val) ; $i++) { 
	// 	if(is_string($val[$i])){
	// 		echo ($val);
	// 	}
	// }
	// foreach ($val as $values) {
	// 	if(is_string($values)){
	// 		var_dump($values);
	// 	}
	// }
	#压缩字符串
	$string = "我大神解答老实交代卢萨卡建档立卡时间的拉卡机第六空间阿斯利康多拉卡时间段库拉索几点啦熟练度空间阿里斯顿就离开阿萨德科技萨洛克简单来说卡机的绿卡时间段卡死了都快就爱看收到了卡死机的快乐撒娇的 ";
	$compressed = gzcompress($string);
	echo $compressed;
	$original = gzuncompress($string);
	echo $original;




 ?>