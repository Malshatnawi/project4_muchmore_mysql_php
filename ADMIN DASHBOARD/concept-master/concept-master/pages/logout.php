<?php
session_start();

unset($_SESSION['customer']);
unset($_SESSION['admin']);
unset($_SESSION['super_admin']);
header('Location: http://localhost/E-Commerce Website PHP and MYSQL\CODE/index.php');

?>
