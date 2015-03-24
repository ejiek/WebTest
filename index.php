<?php
	session_destroy();
?>

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
			<li><a href="examp/constant.php">Constant and defined</a></li>
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
		</ul>
	</body>
</html>
