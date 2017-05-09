<?php include ("inc/header.php") ?>
	<h1>Home</h1>
<?php include ("inc/foot.php") ?>	
<?php require "inc/header.php" ?>


include与require的区别就是一个是报错之后代码还在执行,一个是不执行.
require与require_once的区别是一个可以引入多次,一个只能引入一次.
include与include_once的区别是一个可以引入多次,一个只能引入一次.