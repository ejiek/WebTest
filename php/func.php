<html>
	<head>
		<title>
			Test page N2
		</title>
	</head>
	<body>
		<?php

	function EnglishDateTime($date) {
	 
	  // Массив с английскими названиями дней недели
	  $arrDay = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	 
	  // Массив с английскими названиями месяцев
	  $arrMonth = array("","January","February","March","April","May","June","July","August","September","October","November","December");
	 
	  // Конструируется дата
	  $EnglishDateTime = $arrDay[(date("w",$date))] . ", " . date("d",$date);
	  $EnglishDateTime = $EnglishDateTime  . " " . $arrMonth[date("n",$date)] . " " . date("Y",$date);
	  $EnglishDateTime = $EnglishDateTime  . ", " . date("H",$date) . ":" . date("i",$date);
	 
	  return $EnglishDateTime;

	}
	 
	// Проверка работы функции
	echo EnglishDateTime(time());

	?>
	</body>
</html>