<?php
$connection= mysqli_connect("localhost","root" ,"password" ,"muchmoredb");

        if(!$connection){
            die("Connection failed: " . mysqli_connect_error());
        }
session_start();
$itemtodelete=$_GET['id'];


$_SESSION['cartqty']=array_diff_key($_SESSION['cartqty'], [$itemtodelete => ""]);
// $_SESSION['quantity']=array_diff($_SESSION['quantity'], array($qtytodelete));
header("location: cart.php");
?>