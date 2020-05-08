<?php
//Sử dụng để hứng kết quả trong quá trình xử lý dữ liệu  
$err = [];
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	if (empty($name)) {
		$err['name_required'] = 'Bạn vui lòng nhập họ tên';
	} elseif (strlen($name) < 5) {
		$err['str_required'] = 'Tên của bạn phải trên 5 ký tự';
	}

	if (empty($email)) {
		$err['email_required'] = 'Bạn vui lòng nhập email';
	}

	// nếu không còn lỗi thì thực hiện câu truy vấn 
	if (!$err) {
		$sql = "insert into user('name','email') values('$name','$email')";
		echo $sql;
	}

	

}

echo '<pre>';
//print_r($err);
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