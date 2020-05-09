<?php
session_start();  // khởi động 1 PHP SESION

$_SESSION['name'] = "Giang";
// $_SESSION['age'] = 20;
$_SESSION['info'] = ['contact'=>968411721, 'address'=>'Hà Nội'];


echo('<pre>');
print_r($_SESSION);

// xoá toàn bộ session
//session_destroy();

// Xoá 1 session 
unset($_SESSION['age'])

?>