
<html>
	<head>
	<title>Обновление данных в БД</title>
	</head>

	<body>

	<?php
	// Соединение с сервером БД
	mysql_connect("localhost", "web_test", "webpass") or die (mysql_error ());

	// Выбор БД
	mysql_select_db("web_test") or die(mysql_error());
	
	// Построение SQL-оператора
	$strSQL = "Update web_users set "; 
	$strSQL = $strSQL . "Name= '" . $_POST["Name"] . "', "; 
	$strSQL = $strSQL . "Birth= '" . $_POST["Birth"] . "' "; 

	$strSQL = $strSQL . "Where id = " . $_POST["id"]; 

	// SQL-оператор выполняется
	mysql_query($strSQL);

	// Закрыть соединение с БД
	mysql_close();
	?>

	<h1>BD Updated!</h1>
	<p><a href="list.php">Return to the list</a></p>
	</body>
</html>
