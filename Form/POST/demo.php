<?php 
	echo('<pre>');
	print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="name" value="" placeholder="Name...">
		<br>
		<input type="email" name="email" value="" placeholder="Email...">
		<br>
		<button type="submit">gửi</button>
	</form>
</body>
</html>