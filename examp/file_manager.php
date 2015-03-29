<html>
	<head>
	<title>FileManager</title>
	<style>
		.one_file{
  		width: 100%;
  		height: 20px;
  		display: block;
		}

		.file_name {
 		display: inline-block; 
  		float: left;     
 		text-align:center;  
		}

		.file_size {
		width: 100px;
  		display: inline-block;
  		text-align: left;
  		float: left;
  		margin-right: 10px;
		}

		.file_edited {
		display: inline-block;         
  		float: right; 
  		/*margin-right: 0%;*/
		}


		.file_right {
		display: inline-block;         
  		float: right;
  		/*margin-right: 0%;*/
		}
	</style>
	</head>

	<body>

	<?php
	  
	// Открыть папку
	$folder = opendir("./");

	// Цикл по всем файлам папки
	while (($entry = readdir($folder)) != "") {
	   echo "<div class='one_file'><div class='file_name'><a class='files_name' href='" . $entry . "'>" . $entry . "</a></div>";
	   echo "<div class='file_right'><div class='file_size'><span> Size: " . filesize("$entry") . " B </span> </div>";
	   echo "<div class='file_edited'> <span> edited: " . FormatTime(date(filemtime("$entry"))) . "</span> </div></div></div><hr>";
	}

	// Закрыть папку
	$folder = closedir($folder);



	function FormatTime($date) {
	 
	  // Массив с английскими названиями месяцев
	  $arrMonth = array("","01","02","03","04","05","06","07","08","09","10","11","12");
	 
	  // Конструируется дата
	  $EnglishDateTime = date("d",$date);
	  $EnglishDateTime = $EnglishDateTime  . "." . $arrMonth[date("n",$date)] . "." . date("Y",$date);
	  $EnglishDateTime = $EnglishDateTime  . ", " . date("H",$date) . ":" . date("i",$date);
	 
	  return $EnglishDateTime;

	}

	?>

	</body>

</html>