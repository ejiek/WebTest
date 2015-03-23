<html>
	<head>
		<title>
			Test page №1
		</title>
	</head>
	<body>
		<?php
		define(ITS_A_CONSTANT, "<p>Hello, UNIX!<p>");
		if(defined("ITS_A_CONSTANT")){
			echo(ITS_A_CONSTANT);
		}
		?>
	</body>
</html>
