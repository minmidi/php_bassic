<?php
	echo('<pre>');
	print_r($_FILES);
	print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload file</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" value="" placeholder="Name...">
		<br>
		<input type="email" name="email" value="" placeholder="Email...">
		<br>
		<input type="file" name="upload" value="">
		<br>
		<button type="submit">gửi</button>
	</form>
</body>
</html>

