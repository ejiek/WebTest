<html>
	<head>
	<title>Read file</title>

	</head>
	<body>

	<?php
	$f = fopen("unitednations.txt", "r");

	// Читать построчно до конца файла
	while (!feof($f)) { 

	// Создать массив с запятой-разделителем
	   $arrM = explode(",",fgets($f)); 

	// Записать ссылки (получить данные из массива)
	   echo "<li><a href='http://" . $arrM[1] . "'>" . $arrM[0]. "</a></li>"; 

	}

	fclose($f);
	?>

	</body>
</html>