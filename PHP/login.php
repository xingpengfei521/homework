<?php 
	$name = $_POST["username"];
	$pwd = $_POST["password"];

	$db = new mysqli("localhost","root","","larner");
	#判断输入的内容是否为空
	if ($username==""||$password=="") {
		echo "输入内容为空";
	}
	$pwd1="SELECT password from username where username='{$name}'";
	$db->query("utf8");
	$result=$db->query($pwd1);

	$attr = $result->fetch_row();
	var_dump($attr[0]);
	if($attr[0]==$pwd && !empty($pwd)){
		echo "登陆成功";
	}else{
		echo "登录失败";
	}
 ?>