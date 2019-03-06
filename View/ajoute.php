<!DOCTYPE html>
<html>
<head>
	<title>Ajout</title>
</head>
<body>
<form action="" method="post">
	<?php if(!empty($params)){
		foreach ($params as $key => $value) {
			echo "<font colore='red'>".$key." ".$value."</font>";
		}
		
	}?>
	<input type="username" name="username">
	<input type="password" name="password">
	<input type="submit" name="">
</form>
</body>
</html>