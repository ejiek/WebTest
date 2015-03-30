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
	echo "<form action='edit.php' method='post'>\r\n";
	// Цикл по $rs
	while($row = mysql_fetch_array($rs)) {

		// Записать данные человека
		echo "<span>id:</span><span>" . $row["id"] . "</span></br>";
		echo "<span>Name:</span><input type='text' name='Name' value=" . $row["Name"] . " /></br>";
		echo "<span>Birthdate:</span><input type='text' name='Birth' value=" . $row["Birth"] . " /></br>\r\n";

	}
	echo '<input type="hidden" name="id" value="' . $_GET["id"] . '" />';
	echo "\r\n<input type='submit' value='edit' />\r\n</form>";

	echo "<form action='delete.php' method='post'>\r\n";
	echo '<input type="hidden" name="id" value="' . $_GET["id"] . '" />';
	echo "\r\n<input type='submit' value='Delete this User' />\r\n</form>";

	// Закрыть соединение с БД
	mysql_close();
	?>

	<p><a href="list.php">Return to the list</a></p>

	</body>

</html>