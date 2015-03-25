<?php

	// Начать вашу РНР-сессию
	session_start();

	// Если пользователь не зашёл, отправить его/её к логин-форме
	if ($_SESSION["Login"] != "YES") {
	  header("Location: ../index.php");
	}

session_destroy();

	?>

<html>
	<head>
	<title>Sfety level is under 0</title>
	</head>

	<body>
	<h1>This file is tripleProtected</h1>
	<?php
		echo('session == ');
		echo($_SESSION["Login"]);
	?>
	<p>U c it == U r lgd in</p>
	<p><a href="session_delete.php">Delete session</a></p>
	<a href="../index.php">Go home</a>
	</body>
</html>