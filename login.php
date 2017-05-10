<?php 
	$name1 = '';
	$colorClass = '';
	// 测试submit是否可用
	if(filter_has_var(INPUT_POST, "submit")){
		$name = htmlentities($_POST['name']);
		$password = htmlentities($_POST['password']);
		$test = htmlentities($_POST['text']);
		#当前的内容提交
		if(!empty($name)&&!empty($password)&&!empty($test)){
						//判断密码是否一致
			$restpass=array();
			array_push($restpass, $password);
			if($restpass[0]!=$test){
				$name1 = "你的密码输入一致";
				$colorClass = "alert-info";
			}else{
				$name1 = "恭喜你,注册成功";
				$colorClass = "alert-info";

			}

			#验证用户名是否存在下面这个数组里面
			$arr = array(
					"nanyang","lianmengxiang","wangmingyue","bobo"
				);
			for ($i=0; $i <count($arr); $i++) { 
				# code...
				if($name==$arr[$i]){
					$name1 = "你的用户名已经存在";
					$colorClass = "alert-info";
				}else{
					array_push($arr,$name);
					break;
				}
			}

		}else{
			#内容为空时
			$name1 = "你的内容不能为空";
			$colorClass = "alert-info";
		}

	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login Register</title>
 	<link rel="stylesheet" href="http://bootswatch.com/solar/bootstrap.min.css">
 </head>
 <body>
 	<nav class="navbar navbar-default">
		<div class="container">
			<div class="nav-header">
				<a href="login.php" class="navbar-brand">阿斯达所多</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<!-- 提示用户 -->
		<?php if($name1!=''): ?>
			<div class="alert <?php echo $colorClass; ?>"><?php echo $name1; ?></div>
		<?php endif; ?>	
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 		<div class="form-group">
 			<label for="">用户名:</label>
 			<input type="text" name="name" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="">密码:</label>
 			<input type="password" name="password" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="">确认密码:</label>
 			<input type="password" name="text" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="">注册:</label>
 			<input type="submit" name="submit" class="form-control" class="btn btn-Warning">
 		</div>

 	</form>

	</div>
 	
 </body>
 </html>