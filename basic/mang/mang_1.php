
<?php 
	echo "<h2>Cách tạo mảng</h2>";
	// cách 1 không sử dụng 
	$mang = array('mang 1', 'mang 2','mang 3');

	// cách 2
	$mang2 = ['mang 1', 'mang 2','mang 3'];
	// mảng số
	// 
	echo '<pre>';
	print_r($mang);

	echo "<h2>Mảng kết hợp</h2>";
	// mảng kết hợp
	$mang3 = [
		'key1' => 'ket hop 1',
		'key2' => 'ket hơp 2',
		'key3' => 'ket hop 3'
	];

	print_r($mang3);

	echo "<h2>Mảng 2 chiều</h2>";
	// mảng 2 chiều 
	$mang4 = [
		[
			'key1' => 'ket hop 1',
			'key2' => 'ket hơp 2',
			'key3' => 'ket hop 3'
		],
		[
			'key4' => 'ket hop 4',
			'key5' => 'ket hơp 5',
			'key6' => 'ket hop 6'
		]
	];
	
	print_r($mang4);
	print_r($mang4[0]['key1']);



 ?>