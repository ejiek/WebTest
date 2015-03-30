<html>
	<head>
	<title>User's info</title>
	</head>

	<body>

	<dl>
	<?php
	echo $_POST["id"];
	// Соединиться с сервером БД
	mysql_connect("localhost", "web_test", "webpass") or die (mysql_error ());

	// Выбрать БД
	mysql_select_db("web_test") or die(mysql_error());

	// SQL-оператор, удаляющий запись
	$strSQL = "DELETE FROM web_users WHERE id = " . $_POST["id"];
	mysql_query($strSQL);

	// Закрыть соединение с БД
	mysql_close();
	?>

	</dl>
	<p><a href="list.php">Return to the list</a></p>

	</body>

</html>