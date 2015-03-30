<html>
	<head>
	<title>User's info</title>
	</head>

	<body>

	<dl>

	<?php
	// Соединиться с сервером БД
	mysql_connect("localhost", "web_test", "webpass") or die (mysql_error ());

	// Выбрать БД
	mysql_select_db("web_test") or die(mysql_error());

	// Получить данные из БД, в зависимости от значения id в URL
	$strSQL = "SELECT * FROM web_users WHERE id=" . $_GET["id"];
	$rs = mysql_query($strSQL);
	
	// Цикл по $rs
	while($row = mysql_fetch_array($rs)) {

		// Записать данные человека
		echo "<dt>id:</dt><dd>" . $row["id"] . "</dd>";
		echo "<dt>Name:</dt><dd>" . $row["Name"] . "</dd>";
		echo "<dt>Birthdate:</dt><dd>" . $row["Birth"] . "</dd>";

	}

	// Закрыть соединение с БД
	mysql_close();
	?>

	</dl>
	<p><a href="list.php">Return to the list</a></p>

	</body>

</html>