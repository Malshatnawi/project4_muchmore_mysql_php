<?php

$connection = mysqli_connect("localhost","root" ,"password" ,"muchmoredb");

if(!$connection){
    die("cannot connect to server");
}
?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#email").keyup(function(){
                var email=$("#email").val();

                $.ajax({
                    type:"GET",
                    url:"users.php?email="+email,
                    success:function(data){
                       $("#msg").html(data);

                    }
                });
            });
        })
    </script>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration Form</h3>
                <p>Please enter your user information.</p>

            </div>
            <div class="card-body">

            <?php 
            // if(isset($_GET['email'])){
            //      echo "<div class='alert alert-danger' role='alert' id='msg'>  </div>";} 
                 ?>

                <div id='msg'></div>

                <!-- <div class='alert alert-light' role='alert' id="msg"></div> -->
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" id="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1"  name="password" type="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" name="repassword"  type="password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required=""  name="phone" placeholder="Phone No.">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required=""  name="address" placeholder="Address">
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary"  name="submit" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="check" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>