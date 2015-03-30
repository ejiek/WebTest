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
		<h1>PHP</h1>
		<ul>
			<li><a href="php/constant.php">Constant or defined</a></li>
			<li><a href="php/func.php">Function</a></li>
			<li><a href="php/get_url.php?username=Vlad">$_GET (this link sends "Vlad")</a></li>
			
			<li><form id="post_form" method="post" action="php/post_handler.php">
			<input type="text" name="username" form="post_form">
			<input type="submit" value="$_POST" form="post_form"></form></li>
			
			<li><form class="bord" method="post" action="php/session_login.php">	
				<p><input type="text" name="username" placeholder="Username"></p>
				<input type="text" name="password" placeholder="Password">
				<input type="submit" value="Open Session"></form></li>

			<li><a href="php/cookie.php">Cookie</a></li>
			<li><a href="php/file_manager.php">MidnightSlave</a></li>
			<li><a href="php/readfile_makelinks.php">Read file and Make links</a></li>

			<li><form id="textw_form" method="post" action="php/file_write.php">
			<input type="text" name="textblock" form="textw_form">
			<input type="submit" value="write to file" form="textw_form"></form></li>
		</ul>
		<hr>
		<h1>MySQL</h1>
		<ul>
			<li><a href="MySQL/list.php">List and links</a></li>
		</ul>
	</body>
</html>
