<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--    xử lý code php-->
    <div>
        <?php

        $errs = [];

        $types = [
            'image/jpeg',
            'image/png'
        ];

        $images ='';

            if (isset($_FILES['upload'])) {
                if (!empty($_FILES['upload']['name'])) {
                    $files = $_FILES['upload'];

                    /** các giá trị trong file: name, size, type, tmp_name */
                    $name = time().'_'.$files['name'];

                    /** Setup size upload min or max: MAX-2M */
                    $size = $files['size'];
                    if ($size > 1048000) {
                        $errs['file_max_Size'] = "file bạn chọn quá lớn tối đa là 2M";
                    }

                    /** Setup type upload jpg or diffirent types */
                    $type = $files['type'];
                    if (!in_array($type, $types)) {
                        $errs['file_type'] = "file bạn chọn không phải là ảnh vui lòng chọn lại";
                    }

                    $tmp_name = $files['tmp_name']; // Thư mục tạm trên máy chủ


                    //echo $type;
                    //echo $size;

                } else {
                    $errs['file_required'] = "Bạn chưa nhập file nào";
                }

                /** Không có lỗi gì mới upload lên */
                if (move_uploaded_file($tmp_name, 'images/'.$name)) {
                    $errs['file_success'] = "tải ảnh lên thành công";
                } else {
                    $errs['file_failed'] = "Tải ảnh lên thất bại";
                }
            }

        ?>

    </div>
<!--form-->
    <div>
        <?php if (!empty($errs)): ?>

            <?php foreach($errs as $key => $err): ?>
                <li>
                    <strong><?php echo $key;?></strong> <?php echo $err;?>
                </li>
            <?php endforeach; ?>

        <?php endif; ?>
        
        <div>
            <img src="images/<?php echo $name;?>" style="width: 150px; height: 200px;"  alt="">
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="upload">
            <br>
            <button type="submit">Gửi</button>
        </form>
    </div>
</body>
</html>