

<?php include 'header.php'; ?>

<!--Xử lý lỗi phần đăng nhập-->
<?php
if(!isset($_SESSION)){
    session_start();
}

$errors = [];
// Kiểm tra xem có tồn tại email và password không
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Nếu email nhập vào là rỗng
        if (empty($email)) {
            $errors['email_required'] = 'không được để trống emai';
        }

        if (empty($password)) {
            $errors['password_required'] = 'không được để trống password';
        } 

        if (!$errors) {
            // Kiếm tra thông tin trong CSDL, nếu đúng thì duyệt
            // Lưu vào session
            $_SESSION['profile'] = $_POST; // thông tin của dòng đã duyệt
            // chuyển hướng
            header('location: index.php');

        }
    }

    //echo '<pre>';
    //print_r($_POST);
    //print_r($errors);
?>

<div class="container">
    <div class="col-md-4 m-auto">
        <form method="POST">
            <div class="form-group">

                <?php if ($errors): ?>
                    <?php foreach ($errors as $key => $err):?>
                    <ul>
                        <li><strong><?php echo $key; ?></strong></li> <?php echo $err; ?>
                    </ul>
                <?php endforeach; ?>
                <?php endif ?>
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?php include 'foodter.php'?>