<html>
	<head>
  		<title>List</title>
		 <style type="text/css">
		   .bord {
		    border: solid 1px black; 
		    }
		 </style>
	</head>
	<body>
		<ul>
			<li><a href="examp/constant.php">Constant or defined</a></li>
			<li><a href="examp/func.php">Function</a></li>
			<li><a href="examp/get_url.php?username=Vlad">$_GET (this link sends "Vlad")</a></li>
			
			<li><form id="post_form" method="post" action="examp/post_handler.php">
			<input type="text" name="username" form="post_form">
			<input type="submit" value="$_POST" form="post_form"></form></li>
			
			<li><form class="bord" method="post" action="examp/session_login.php">	
				<p><input type="text" name="username" placeholder="Username"></p>
				<input type="text" name="password" placeholder="Password">
				<input type="submit" value="Open Session"></form></li>

			<li><a href="examp/cookie.php">Cookie</a></li>
			<li><a href="examp/file_manager.php">MidnightSlave</a></li>
			<li><a href="examp/readfile_makelinks.php">Read file and Make links</a></li>

			<li><form id="textw_form" method="post" action="examp/file_write.php">
			<input type="text" name="textblock" form="textw_form">
			<input type="submit" value="write to file" form="textw_form"></form></li>
		</ul>
	</body>
</html>
