<?php
session_start();

unset($_SESSION['profile']); // huỷ session có key là profile

header('location: index.php')

 ?>