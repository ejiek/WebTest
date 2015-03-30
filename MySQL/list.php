
<html>
	<head>
	<title>BD list</title>
	</head>

	<body>
	<?php

	// Соединение с сервером БД
	mysql_connect("localhost", "web_test", "webpass") or die (mysql_error ());

	// Выбор БД
	mysql_select_db("web_test") or die(mysql_error());

	// SQL-запрос
	$strSQL = "SELECT * FROM web_users ORDER BY Name DESC";

	// Выполнить запрос (набор данных $rs содержит результат)
	$rs = mysql_query($strSQL);
	
	// Цикл по $rs
	while($row = mysql_fetch_array($rs)) {

	   // Имя человека
	  $strName = $row['Name'];

	   // Создать ссылку на user.php с id-value в URL
	   $strLink = "<a href = 'user.php?id=" . $row['id'] . "'>" . $strName . "</a>";

	    // Листинг ссылок
	   echo "<li>" . $strLink . "</li>";

	  }

	// Закрытие соединения
	mysql_close();
	?>
	<br><hr><br>
	<form action="insert.php" method="post">
	<input type="text" name="Name" placeholder="Username" />
	<input type="text" name="Birth" placeholder="1999-12-31"/>
	<input type="submit" value="Create New User" />

	</form>
	</body>
</html>