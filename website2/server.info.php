<?php
	#创建服务器端数组信息
	$server = [
		"Host Server Name"=>$_SERVER['SERVER_NAME'],
		//当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。
		"Server Software"=>$_SERVER['SERVER_SOFTWARE'],
		//服务器标识字符串，在响应请求时的头信息中给出。
		"Docuement Root"=>$_SERVER['DOCUMENT_ROOT'],
		//当前运行脚本所在的文档根目录。在服务器配置文件中定义。
		"Host Name"=>$_SERVER['HTTP_HOST'],
		//当前请求头中 Host: 项的内容，如果存在的话。
		"Script Name"=>$_SERVER['SCRIPT_NAME'],
		//包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
		"Script FileName"=>$_SERVER['SCRIPT_FILENAME'],
		//当前执行脚本的绝对路径。
		"Current Page"=>$_SERVER['PHP_SELF']
		//当前执行脚本的文件名，与 document root 有关。例如，在地址为 http://example.com/foo/bar.php 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /foo/bar.php。__FILE__ 常量包含当前(例如包含)文件的完整路径和文件名。 从 PHP 4.3.0 版本开始，如果 PHP 以命令行模式运行，这个变量将包含脚本名。之前的版本该变量不可用。
	];
	echo $server["Host Server Name"];
	echo "<hr>";
	echo $server["Server Software"];
	echo "<hr>";
	echo $server["Docuement Root"];//当前运行脚本所在的文档根目录。在服务器配置文件中定义。
	echo "<hr>";
	echo $server["Host Name"];//文件访问的地址栏
	echo "<hr>";
	echo $server["Host Name"].$server["Script Name"];//路径,以及文件名
	echo "<hr>";
	echo $server["Script FileName"];
	echo "<hr>";
	echo $server["Current Page"];

	print_r($server);
	#客户端数组信息
	$client = [
		"Client System Info"=>$_SERVER['HTTP_USER_AGENT'],
		//当前请求头中 User-Agent: 项的内容，如果存在的话。该字符串表明了访问该页面的用户代理的信息。一个典型的例子是：Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586)。除此之外，你可以通过 get_browser() 来使用该值，从而定制页面输出以便适应用户代理的性能。

		"Client D"=>$_SERVER['REMOTE_PORT'],
		//用户机器上连接到 Web 服务器所使用的端口号。
		"Client IP"=>$_SERVER['REMOTE_ADDR']
		//当前运行脚本所在的服务器的 IP 地址。
	];
	echo $client["Client System Info"];//当前请求头中 User-Agent: 项的内容，如果存在的话。该字符串表明了访问该页面的用户代理的信息。一个典型的例子是：Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586)。除此之外，你可以通过 get_browser() 来使用该值，从而定制页面输出以便适应用户代理的性能。
	echo "<hr>";
	echo $client["Client D"];//用户机器上连接到 Web 服务器所使用的端口号。
	echo "<hr>";
	echo $client["Client IP"];//浏览当前页面的用户的 IP 地址。






  ?>