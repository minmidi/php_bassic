<?php include 'header.php'; ?>

<?php if (isset($_SESSION['profile'])): ?>
<!-- Nếu có thông tin người dùng cho hiển thị tại đây-->
	<h2>Xin chào:   <?php echo $_SESSION['profile']['email']; ?></h2>
	<div>
		<h2>Chào mừng bạn đến với trang chủ</h2>
	</div>
<?php else: ?>
	<?php echo 'dame'; ?>
<?php endif; ?>


<?php include 'foodter.php'?>


