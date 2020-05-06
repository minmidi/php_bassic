<?php
	// mảng một và nhiều chiều có thể khai báo tuỳ ý nhưng cần phải đồng nhất dữ liệu
	// $mang = [
	// 	[123, 456, 789], 'abc',TRUE, '', NUll
	// ];
	

	// Mảng kết hợp
	$mang = [
		'name' => 'giang',
		'old' => 22,
		'address' => [
			'City' => 'Thái Bình',
			'Distric' => 'Hưng Hà',
			'Address' => 'Hiến Nạp'
		]
	];

	echo '<pre>';
	print_r($mang);
	//print_r ($mang[1]);
	print_r($mang['address']['City']);

?>