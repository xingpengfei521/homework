<?php 
	#shorhand:语言中一些简写的方法.
	$loggedIn = false;
	if($loggedIn){
		echo "U r loggedIn";
	}else{
		echo "U r NOT loggedIn";
	}
	#三目运算符,或者?:表达式
	echo ($loggedIn)?"U r loggedIn":"U r NOT loggedIn";
	$isRegistered = ($loggedIn === true)?true:false;
	echo "</br>";
	echo $isRegistered;
	#三目嵌套
	$age = 7;
	$score = 12;
	echo "<hr>";
	echo "你的分数是:".($score>10?($age>10?"中等成绩1":"优等成绩"):($age=10?"差的成绩":"中等成绩2"));
	$arr = [1,2,3,4,5];
 ?>
 <!-- html  add  php 混编 -->
 <!-- <div>
 	<?php 
 		if($loggedIn){ ?>
 			<h1>Welcome to lanou!</h1>
	
	<?php }else{ ?>
	<h1>Good by!</h1>
	<?php } ?>	
</div> -->
<!-- html  add  php 混编 -更完美的方法 -->
<!-- <div>
	<?php if($loggedIn): ?>
		<h1>Welcome to lanou!</h1>
	<?php else: ?>
		<h1>Good by!</h1>
	<?php endif; ?>
</div> -->
<!-- 遍历数组 -->
<!-- <div>
	<?php foreach ($arr as $value): ?>
		<?php echo $value; ?>
	<?php endforeach; ?>
</div> -->


<div>
	<?php for ($i=0; $i <count($arr) ; $i++): ?>
		<?php echo $arr[$i]; ?>
	<?php endfor; ?>
</div>






