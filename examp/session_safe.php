<?php

	// Начать вашу РНР-сессию
	session_start();

	// Если пользователь не зашёл, отправить его/её к логин-форме
	if ($_SESSION["Login"] != "YES") {
	  header("Location: ../index.php");
	}

	?>

<html>
	<head>
	<title>Sfety level is under 0</title>
	</head>

	<body>
	<h1>This file is tripleProtected</h1>
	<p>U c it == U r lgd in</p>
	<a href="../index.php">Go home</a>
	</body>
</html>