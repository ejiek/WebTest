
<html>
	<head>
	<title>BD insert</title>
	</head>

	<body>
	<?php

	echo "'" . $_POST["Name"] . "', ";
	echo "'" . $_POST["Birth"] . "'')";
	// Соединение с сервером БД
	mysql_connect("localhost", "web_test", "webpass") or die (mysql_error ());

	// Выбор БД
	mysql_select_db("web_test") or die(mysql_error());

	
	// Построение SQL-оператора

	$strSQL = "INSERT INTO web_users(";

	$strSQL = $strSQL . "Name, ";
	$strSQL = $strSQL . "Birth) ";

	$strSQL = $strSQL . "VALUES(";

	$strSQL = $strSQL . "'" . $_POST["Name"] . "', ";
	$strSQL = $strSQL . "'" . $_POST["Birth"] . "')";

	// SQL-оператор выполняется
	mysql_query($strSQL) or die (mysql_error());

	// Закрытие соединения
	mysql_close();
	?>

	<h1>User has been created!</h1>
	</body>
</html>