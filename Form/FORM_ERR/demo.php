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


	$err = [];
	echo('<pre>');
	// kiếm tra file upload xem có tồn tại không
	if (isset($_FILES['upload'])) {
		if (!empty($_FILES['upload']['name'])) {
			// xử lý file
			//$file = $_FILES(['upload']);
			//$file_size = $_FILES['size'];
		} else {
			$err['file_requred'] = 'Yêu cầu nhập vào ảnh';
		}
		print_r($_FILES['upload']);
	}

	// Kiếm tra xem các ô input xem có tồn tại chỉ cần kiếm tra 1 phần tử trong chuỗi là được vì nó bao gồm trong form
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		if (empty($name)) {
			$err['name_requred'] = 'Yêu cầu nhập vào tên';
		}

		$email = $_POST['email'];
		if (empty($email)) {
			$err['email_requred'] = 'Yêu cầu nhập vào email';
		}

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
	
	<div>
		<?php
			echo '<pre>';
				print_r($err);
			echo '</pre>'; 
		?>
	</div>

	<div class="alert alert-danger" role="alert">
  		<?php foreach ($err as $key => $errs): ?>
			<strong><?php echo $key; ?></strong> <?php echo $errs; ?>
  		<?php endforeach ?>
	</div>

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

