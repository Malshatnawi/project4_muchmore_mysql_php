<?php 

session_start();

if(isset($_SESSION['customer'])){
}
else{
    echo "NOT ALLOWED TO VIEW THIS PAGE";
    die();
}

$connection = mysqli_connect("localhost","root" ,"password" ,"muchmoredb");
if(!$connection){
    die("can not connect to the server");
}

// $query="SELECT * FROM customers WHERE customer_id = {$_SESSION['customer']};";
// $result=mysqli_query($connection, $query);
// $row=mysqli_fetch_assoc($result);

if (isset($_POST['customer_update'])){
    //   echo "request is set";
    //   die();
    $customer_name      = $_POST['customer_name'];
    $customer_email     = $_POST['customer_email'];
    $customer_password  = $_POST['customer_password'];
    $customer_phone     = $_POST['customer_phone'];
    $customer_address   = $_POST['customer_address'];
    
    $query  = "UPDATE customers SET customer_name      = '$customer_name',
                                    customer_email     = '$customer_email',
                                    customer_phone     = '$customer_phone',
                                    customer_password  = '$customer_password',
                                    customer_address   = '$customer_address'
              WHERE customer_id = {$_SESSION['customer']}; ";
             
    
             $result=mysqli_query($connection, $query);
    
   
    // header("location:manage_customers.php");
    // $query  = "SELECT * FROM customers WHERE customer_id = {$_GET['id']}";
    // $result = mysqli_query($connection, $query);
    // $row    = mysqli_fetch_assoc($result); 
}

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Muchmore - Update Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<ul>
					
                    <li class="">
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="font-size: 2.3em; color:black;"></i></a>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram" style="font-size: 2.5em; color:black;"></i></a>
					<a href="https://www.twitter.com/"><i class="fab fa-twitter" style="font-size: 2.5em; color:black;"></i></a>
							<form action="#" method="post" class="last">
							<?php 
                                // if(!isset($_SESSION['customer'])){
                                //     echo "<button class='btn btn-primary'>  <a class='text-dark' href='ADMIN DASHBOARD\concept-master\concept-master\pages/login.php'>Login</a> 
                                //     </button>";

                                //     echo "<button class='btn btn-primary ml-3'>  <a class='text-dark' href='ADMIN DASHBOARD\concept-master\concept-master\pages/registration.php'>Register</a> 
                                //     </button>";
                                // }
                                // else{
								// 	echo "<button class='btn btn-primary'><a class='text-dark' href='ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/profile_orders.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Orders History</a></button>";
                                //     echo "<button class='btn btn-primary ml-3'><a class='text-dark' href='ADMIN DASHBOARD\concept-master\concept-master\pages/logout.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Logout</a></button>";
								// }
								


                            

                               ?>
                                	
							</form>
						</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Muchmore </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
					<?php 
						if(isset($_SESSION['itemsno'])){
							echo "<a href='cart.php'> <h5 style='color:black;'> {$_SESSION['itemsno']}</h5><i style='font-size:2.5em; color:black;' class='fas fa-shopping-cart'></i></a>";
						}
						else{
							echo "<a href='cart.php'> <h5>0</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						?>

						<!-- <li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li> -->
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form method="POST" class="d-flex" action="">
					<input class="form-control" type="text" name="item" placeholder="Search here..." required="">

					<button type="submit" name="submit" class="btn btn-primary submit">
						<i class="fas fa-search"></i>
					</button>

					</form>
					


					<?php
						
						
						 if(isset($_POST['submit'])){
							 $item=$_POST['item'];

							$_SESSION['item']=$_POST['item'];

							// if(isset($_SESSION['item'])){
							// 	echo "ok";
							// 	die();
							// }
							// else{
							// 	echo "no";
							// 	die();
							// }
							header("location:searchresults.php");}
						?>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						
							
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
										<h5 class="tittle-w3layouts-sub"> Categories </h5>
										<ul>
											<?php 
											 $query = "select * from categories;";
											 $result = mysqli_query($connection,$query);
											 while($row = mysqli_fetch_assoc($result)){
												 echo "<li class='media-mini mt-3'>
												 <a href='index.php'>{$row['category_name']}</a>
											 </li>";}?>
											 </ul>
											 </div>




											
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> On Sale </h5>
											<ul>
											<?php 
											 $query = "select * from products;";
											 $result = mysqli_query($connection,$query);
											 
											 while($row = mysqli_fetch_assoc($result)){
												 if(!empty($row['ondiscount'])){
													echo "<li class='media-mini mt-3'>
													<a href='products.php'>{$row['product_name']}</a>
												</li>";

												 }
												 }?>
												 </ul>
											 </div>



										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Muchmore </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/logo.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<?php 
						 if(!isset($_SESSION['customer'])){
							echo "<li class='nav-item'>  <a class='nav-link' href='ADMIN DASHBOARD\concept-master\concept-master\pages/login.php'>Login</a> 
							</li>";

							echo "<li class='nav-item'>  <a class='nav-link' href='ADMIN DASHBOARD\concept-master\concept-master\pages/registration.php'>Register</a> 
							</li>";
						}
						else{
							echo "<li class='nav-item'><a class='nav-link' href='profile_orders.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Orders</a></li>";
							echo "<li class='nav-item'><a class='nav-link' href='ADMIN DASHBOARD\concept-master\concept-master\pages/logout.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Logout</a></li>";
						}
?>
					</ul>

				</div>
			</nav>
		</header>
		<!-- banner -->
		<div class="banner_inner" style="background:url('./images/slider_2.png')no-repeat; background-size: cover;height:30em;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html" style="color:black;font-size:1.75em">Home</a>
							<i style="color:black;font-size:1.75em">|</i>
						</li>
						<li style="color:black;font-size:1.75em">Update Profile</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->

    <?php 
    $query="SELECT * FROM customers WHERE customer_id = {$_SESSION['customer']};";
    $result=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($result);

    ?>









	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Customer Profile</h3>
			<div class="inner_sec">
			
				<div class="contact_grid_right">
					<form action="#" method="post">
						<div class="row contact_left_grid">

							<div class="col-md ">
                            <p class="sub text-center text-bold">Edit your profile</p> 
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="customer_name" placeholder="" required=""  value= "<?php echo $row['customer_name']?>" >
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="customer_email" placeholder="" required="" value= "<?php echo $row['customer_email']?>">
								</div>
								<div class="form-group">
									<label class="my-2">Password</label>
									<input class="form-control" type="password" name="customer_password" placeholder="" required="" value= "">
                                </div>
                                <!-- <div class="form-group">
									<label class="my-2">Re-enter password</label>
									<input class="form-control" type="text" name="repassword" placeholder="" required="" >
                                </div> -->
                                <div class="form-group">
									<label class="my-2">Phone No.</label>
									<input class="form-control" type="numbers" name="customer_phone" placeholder="" required="" value="<?php echo $row['customer_phone']?>" >
                                </div>
                                <div class="form-group">
									<label class="my-2">Address</label>
									<input class="form-control" type="text" name="customer_address" placeholder="" required="" value= "<?php echo $row['customer_address']?>">
                                </div>
                                <input class="form-control" type="submit" value="Update" name="customer_update"><br><br><br>
							</div>
							
						</div>
					</form>
                </div>
                

                <p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Address</h6>
								<p> Amman, Jordan

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> muchmore@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>009627 7032 2403</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div> -->

	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p> Furnishings accessories at Muchmore. Discover the finest Modern and Classic furniture and furnishings for your Homes & Offices.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="https://www.facebook.com/">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://www.instagram.com/">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://www.twitter.com/">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>0926k 4th block building, Mecca street, Amman City.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +962777777999</p>
							<p>Email :
								<a href="info@muchmore.com">info@muchmore.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="index.php">About</a>
						</li>
						<li>
							<a href="404.php">Error</a>
						</li>
						<li>
							<a href="products.php">Shop</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2020 Muchmore. All Rights Reserved 
					<!-- <a href="http://w3layouts.com/"> W3layouts </a> -->
				</p>
			</div>
		</div>
	<!-- //footer -->

	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>