<!-- Lỗi 1: Lỗi không tìm thấy biến sử dụng isset kiểm tra tồn tại -->
 <?php
 //$var = '';
 	//if (isset($var)) {
	// 	echo 'tồn tại';
	// } else {
	// 	echo 'Không tồn tại';
	// } 
 ?>


 <!-- Kiểm tra xem submit rồi nhưng chưa nhập sử dụng !empty -->


<?php
	echo('<pre>');
	// kiếm tra file upload xem có tồn tại không
	if (isset($_FILES['upload'])) {
		if (!empty($_FILES['upload']['name'])) {
			echo 'đã chọn file';
		} else {
			echo 'chưa chọn file';
		}
		print_r($_FILES['upload']);
	}

	// Kiếm tra xem các ô input xem có tồn tại chỉ cần kiếm tra 1 phần tử trong chuỗi là được vì nó bao gồm trong form
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		print_r($_POST);
	}
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

