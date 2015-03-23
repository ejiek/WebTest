<html>

	<head>
	<title>Login</title>
	</head>
	
	<body>
	
	<?php

	// Проверить корректность username и password
	if ($_POST["username"] == "EDU\petrov.vd" && $_POST["password"] == "php") {
	 
	// Если корректны, устанавливаем значение сессии в YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "<h1>You are logged in! Gongrats</h1>";
	 
	}
	else {
	 
	// Если некорректны, устанавливаем сессию в NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<h1>Username or Passwors are not correct</h1>";
	 
	}

	  echo "<p><a href='session_safe.php'>Here is the link for a safe file</a></p>";
	?>

	</body>
</html>