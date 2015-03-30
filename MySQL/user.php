<html>
	<head>
	<title>User's info</title>
	</head>

	<body>

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
		echo "<span>id:</span><span>" . $row["id"] . "</span></br>";
		echo "<span>Name:</span><span>" . $row["Name"] . "</span></br>";
		echo "<span>Birthdate:</span><span>" . $row["Birth"] . "</span></br>\r\n";

	}

	echo "<form action='delete.php' method='post'>\r\n";
	echo '<input type="hidden" name="id" value="' . $_GET["id"] . '" />';
	echo "\r\n<input type='submit' value='Delete this User' />\r\n</form>";

	// Закрыть соединение с БД
	mysql_close();
	?>

	<p><a href="list.php">Return to the list</a></p>

	</body>

</html>