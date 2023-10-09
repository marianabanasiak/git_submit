<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<form method="post" action="index.php">
			<input type="text" name="firstName"/>
			<input type="password" name="password">
			<input type="checkbox" value="remember" required>
			<input type="radio" id="dron" value="Dron" name="dron"/>
			<label for="dron">Dronn</label>
			<input type="submit" value="Wyślij"/> 
		</form>
	</body>
</html>
<?php
	echo "Hello World";
?>