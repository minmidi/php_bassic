<?php 
	echo '<pre>';
	print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<form action="" method="GET">
		<input type="text" name="name" value="" placeholder="Name...">
		<br>
		<input type="email" name="email" value="" placeholder="Email...">
		<br>
		<button type="submit">gửi</button>
	</form>

	<a href="?name=giang&old=29">click</a>
</body>
</html>