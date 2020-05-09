<?php 
// Mảng thường sử dụng để gán kết quả của hàm trả về nhiều giá trị

function demo($a, $b) {
	$ketqua = [];

	$ketqua['phep_cong'] = $a + $b;
	$ketqua['phep_tru'] = $a - $b;
	$ketqua['phep_nhan'] = $a * $b;
	$ketqua['phep_chia'] = $a / $b;

	return $ketqua;
}

$input = demo(15,20);

echo '<pre>';
print_r($input);
?>
