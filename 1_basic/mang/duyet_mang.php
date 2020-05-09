<?php
// duyệt mảng
$mang = ['mang 1', 'mang 2','mang 3']; 


/*
	DUYỆT MẢNG DÙNG FOR
 */ 

// cách 1. Áp dụng khi số phần tử mảng ít nếu gặp lỗi undifined offset thì kiếm tra lại giới hạn tăng của mảng
for ($i = 0; $i < 3 ; $i++) {
	echo $mang[$i].'<br>';
}

echo '<br>';

// cách 2. Áp dụng trong tất cả các trường hợp (thường sử dụng)
for ($j = 0; $j < count($mang); $j++) {
	echo $mang[$j].'<br>';
}


/*
	DUYỆT MẢNG DÙNG FOREACH
 */ 

echo '<br>';

foreach ($mang as $key => $value) {
	echo $value.'<br>';
}

 ?>