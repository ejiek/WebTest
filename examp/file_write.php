<html>
	<head>
	<title>Write to file</title>
	</head>
	<body>

	<?php

	// Открыть текстовый файл
	$f = fopen("text.txt", "w");

	// Записать текст
	fwrite($f, $_POST["textblock"]); 

	// Закрыть текстовый файл
	fclose($f);

	// Открыть файл для чтения и прочитать строку
	$f = fopen("text.txt", "r");
	while (!feof($f)) { 
		// Читать текст
		echo fgets($f); 
		echo "<br>";
	}
	fclose($f);

	?>
	
	</body>

</html>