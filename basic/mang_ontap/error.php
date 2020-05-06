<?php
//Sử dụng để hứng kết quả trong quá trình xử lý dữ liệu  

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "insert into "

}

echo '<pre>';
print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>error</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="name">
		<br>
		<input type="text" name="email">
		<br>
		<button type="submit">gửi</button>
	</form>
</body>
</html>