<html>

	<head>
	<title>Cookie</title>
	</head>
	
	<script>
	function delete_cookie(name) {
		document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
		alert('cookie has been deleted');
	}
	</script>

	<body>
	
	<?php 

	// Установит куку на 20 минут.
	setcookie("Test", "Hello, Im a cookie!", time()+60*20);   
	 
	// Записать информацию клиенту
	echo $_COOKIE ["Test"];    

	?>

	<input type="button" onclick="delete_cookie('Test');" value="Delete cookie">

	</body>
</html>