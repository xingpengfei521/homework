<?php 
	#获取用户输入的信息
	$username =$_POST["username"];
	$password=$_POST["password"];
	$apassword = $_POST["apassword"];
	#判断用户名和密码是否填写
	if ($username==""||$password=="") {
		echo "输入内容为空";
	}
	if($password!=$apassword){
		echo "请再次输入密码";		
	}
	#创造连接的对象（登录数据库）
	$mysqli= new mysqli("localhost","root","","larner");
	#设置传输密码(防止出现乱码)
	$mysqli->query("utf8");
	$name= "SELECT username FROM username WHERE username='*'";
	$result = $mysqli->query($name);//执行sql语句
	$ret=mysqli_fetch_assoc($result);//将结果转变为数组
	if (empty($ret)){
		echo "用户名可以用";
	}else{
		echo "用户名已存在";
	}
	#插入对象
	$sql="INSERT INTO username(username,password,apassword) VALUES ('{$name}','{$password}','{$apassword}')";
	$result1 = $mysqli->query($sql);
	#执行sql语句 有两个参数一个是数据库的名字，一个是数据库的内容的变量
	if ($result1) {
		echo "成功";
	}else{
		echo "失败";
	}
	#关闭数据库
	mysqli_close($mysqli);
 ?>