<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài tập vòng lặp</title>
</head>
<body>
	
	<!-- 1. In ra các số chẵn nhỏ hơn 10 -->
	<h2>1. In ra các số chẵn nhỏ hơn 10</h2>
	<?php
		for ($i = 0; $i < 10; $i++) {
		 	if ($i % 2 == 0) {
		 		echo $i;
		 	} 
		 } 
	 ?>

	 <!-- 2. In ra tổng các số nhỏ hơn 10 -->
	<h2>2. In ra tổng các số nhỏ hơn 10</h2>
	<?php
		$tong = 0; 
		for($i = 0; $i < 10; $i++) {
			$tong += $i;
		}
	?>
	<h4>Tổng của các số nhỏ hơn 10 là: <?php echo $tong; ?>	</h4>

	<!-- 3. In ra bảng cửu chương -->
	<h2>3. In ra bảng cửu chương</h2>
	<table border="1" cellspacing="0" cellpadding="0">
		
		<?php for($i = 1; $i < 11; $i++) : ?>
		<tr>
			<?php for ($j = 1; $j < 10; $j++) :?>
				<td><?php echo $j; ?> X <?php echo $i; ?> = <?php echo $i*$j; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>


	<!-- 4. In ra bàn cờ vua -->
	<h2>4. In ra bàn cờ vua</h2>

	<table border="1" cellspacing="0" cellpadding="0">

		<!-- vòng for cho các hàng -->
		<?php for($i = 0; $i < 8; $i++) : ?>
		<tr>

			<!-- Vòng for cho cột -->
			<?php for ($j = 0; $j < 8; $j++) :
				$tong = $i + $j;
			?>
			<!-- điều kiện nếu là ô lẻ thì đen ô chẵn thì trắng -->
			<?php if($tong % 2 == 0) { ?>
				<td style="width: 50px; height: 50px"></td>
			<?php } else {?>	
				<td style="width: 50px; height: 50px; background: black;"></td>
			<?php } ?>
				

			<?php endfor; ?>
			<!-- Kết thúc vòng for cho cột -->
		</tr>
	<?php endfor; ?>
	<!-- Kết thúc vòng for cho hàng -->
	</table>



	





</body>
</html>