<?php

$connection = mysqli_connect("localhost","root" ,"password" ,"muchmoredb");

if(!$connection){
    die("cannot connect to server");
}


$query = "SELECT * from products WHERE product_name LIKE '%{$_GET['searchbar']}%';";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){


                                        echo "<div class='col-md-4 product-men women_two shop-gd'>";
                                        echo "<div class='product-googles-info googles'>";
                                        echo "<div class='men-pro-item'>";
                                        echo "<div class='men-thumb-item'>";
                                        echo "<img src={$row['product_image']} class='img-fluid' alt=''>";
                                        echo "<div class='men-cart-pro'>";
                                        echo "<div class='inner-men-cart-pro'>";
                                        echo "<a href='single_product.php?id={$row['product_id']}' class='link-product-add-cart'>Quick View</a>";
                                        echo "</div>
                                        </div>
                                        <span class='product-new-top'>New</span>
                                    </div>
                                    <div class='item-info-product'>
                                        <div class='info-product-price'>
                                            <div class='grid_meta'>
											<div class='product_price'>
											<h3 class='text-secondary'>
												<a class='text-secondary' href='single_product.php?id={$row['product_id']}'>{$row['product_name']}</a>
											</h3>
											<div class='grid-price mt-2'>
												<span style='text-decoration:line-through' class='money '><h5 class='text-danger'>{$row['product_price']} JD</h5></span>
											</div>
											<div class='grid-price mt-2'>
												<span class='money '><h4 class='text-success'>{$row['product_special']} JD</h4></span>
											</div>
										</div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class='clearfix'></div>
                                    </div>
                            </div>
                            </div>

                        </div>";
                                        

									}