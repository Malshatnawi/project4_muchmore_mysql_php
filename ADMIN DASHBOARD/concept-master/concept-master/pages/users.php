<?php

mysqli_connect("localhost","root" ,"password" ,"muchmoredb");

if(!$connection){
    die("cannot connect to server");
}


$query="SELECT * FROM customers WHERE customer_email = '{$_GET['email']}';";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) == 0){
    $msg = "<div class='alert alert-success' role='alert' >Welcome</div>";

}else{
    $msg = "<div class='alert alert-danger' role='alert'>This email already exists</div>";
};

echo $msg;


?>