<!-- Truyền tham số cho hàm -->

<?php
	// Thêm mới dữ liệu vào bảng
	function _add($table, $data = []) {

		// kiểm tra điều kiện nhập vào phải là mảng
		if (is_array($data)) {
			// convert ra number key name => giang <=> [1] => name ; [1] => giang
		$keys = array_keys($data);
		$value = array_values($data);

		// Nối chuỗi để truyền vào
		$keys = implode(',', $keys);
		$value = " ' " . implode("','", $value)." ' ";

		//$sql = "insert into $table(colum1,colum2) values('values1', 'values2')";
		$sql = "insert into $table($keys) values($value)";
		echo $sql;
		}
		
		// pre ra mảng
		echo '<pre>';
			print_r($keys);
			print_r($value);
		echo '</pre>';

	}


	// kiểm tra tồn tại của name
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$status = $_POST['status'];


		_add('category',[
		'name' => $name,
		'status' => $status,
	]);
	}
	// thêm giá trị vào hàm
	
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
		<input type="text" name="status">
		<br>
		<button type="submit">gửi</button>
	</form>
</body>
</html>