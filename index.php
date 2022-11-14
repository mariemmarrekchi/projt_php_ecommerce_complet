<?php
header("Cache-Control:no-cache");
session_start();
require_once("Freshmart-Organic-Food-Template/php/model/Class/produit.php");

$prod=new Produit();
$res=$prod->afficherProduit();
$res1=$prod->afficherProduitVegetal("vegtables");
$res2=$prod->afficherProduitFruit("fruits");
$res3=$prod->afficherProduitJuice("juice");

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="Freshmart-Organic-Food-Template/img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/css/style.css">
		<link rel="stylesheet" href="Freshmart-Organic-Food-Template/css/reponsive.css">
	</head>
	
	<body class="home home-4">
		<div id="all">
			<!-- Header -->
			<header id="header">
				<div class="container">
					<div class="header-top">
						<div class="row align-items-center">
							<!-- Header Left -->
							<div class="col-lg-5 col-md-5 col-sm-12">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">
										<li class="dropdown">
											<a href="#" title="Homepage">Home</a>
											
										</li>
										
										<li class="dropdown">
											<a href="Freshmart-Organic-Food-Template/product-grid-left-sidebar.html" title="Product">Product</a>
											<div class="dropdown-menu">
												<ul>
													<li class="has-image">
														<img src="Freshmart-Organic-Food-Template/img/product/product-category-1.png" alt="Product Category Image">
														<a href="Freshmart-Organic-Food-Template/product-grid-left-sidebarLegume.php" title="Vegetables">Vegetables</a>
													</li>
													<li class="has-image">
														<img src="Freshmart-Organic-Food-Template/img/product/product-category-2.png" alt="Product Category Image">
														<a href="Freshmart-Organic-Food-Template/product-grid-left-sidebarFruit.php" title="Fruits">Fruits</a>
													</li>
													
													<li class="has-image">
														<img src="Freshmart-Organic-Food-Template/img/product/product-category-4.png" alt="Product Category Image">
														<a href="Freshmart-Organic-Food-Template/product-grid-left-sidebarJuice.php" title="Juices">Juices</a>
													</li>
													
												</ul>
											</div>
										</li>
										
										<li class="dropdown">
											<a href="#" title="Page">Page</a>
											<div class="dropdown-menu">
												<ul>
													<li>
														<a href="Freshmart-Organic-Food-Template/product-cart.php" title="Cart">Cart</a>
													</li>
													<li>
														<a href="Freshmart-Organic-Food-Template/product-checkout.html" title="Checkout">Checkout</a>
													</li>
													<li class="dropdown-submenu">
														<a href="#" title="User">User</a>
														<div class="dropdown-menu level2">
															<ul>
																<?php
																if(isset($_SESSION['login'] )&& isset($_SESSION['pass']) ||  (isset($_SESSION['email'] )&& isset($_SESSION['motpass'])) ){
																?>
																<li><a href="Freshmart-Organic-Food-Template/php/controller/logout.php" title="Login">logout</a></li>
																
																<li><a href="whishlists.php" title="My Wishlists">My Wishlists</a></li>
																<?php 
																}
																else{
																		?>
																<li><a href="Freshmart-Organic-Food-Template/user-login.php" title="Login">Login </a></li>
																<li><a href="Freshmart-Organic-Food-Template/user-register.php" title="Register">Register</a></li>
																<li><a href="Freshmart-Organic-Food-Template/admin.php" title="My Account">Admin</a></li>
																<li><a href="Freshmart-Organic-Food-Template/whishlists.php" title="My Wishlists">My Wishlists</a></li>
															<?php }?>
															</ul>
														</div>
													</li>
													
												</ul>
											</div>
										</li>
										
										<li class="dropdown">
											<a >Blog</a>
											<div class="dropdown-menu">
												<ul class="has-sub">
													
													<li><a href="Freshmart-Organic-Food-Template/blog-grid-full-width.php?page=1" title="Blog Grid - Full Width">Blog Grid - Full Width</a></li>
													<li><a href="Freshmart-Organic-Food-Template/consulterCommentaire.php" title="Blog Grid - Full Width">Consulter des commentaires</a></li>
													
												</ul>
											</div>
										</li>
										<?php 
											if(isset($_SESSION['email'] )&& isset($_SESSION['motpass'])){
										?>
										<li>
											<a href="Freshmart-Organic-Food-Template/commentaire.php"> commentaires</a>
										</li>
										<?php
												}
										?>
										<li>
											<a href="Freshmart-Organic-Food-Template/page-contact.php">Contact</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->		
								<div class="logo">
									<a href="Freshmart-Organic-Food-Template/home-4.html">
										<img class="img-responsive" src="Freshmart-Organic-Food-Template/img/logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							<!-- Header Right -->
							<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
								<!-- Search -->							
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
								
								<?php 
								
								if(isset( $_SESSION['cart'])){
								
									
									$whereIn="";
									//$som=0;
									
									foreach($_SESSION['prix'] as $val)
										{
											//$som+=$val;
											
										}
										?>
										<?php
								
									foreach($_SESSION['cart'] as $val)
									{
										$whereIn.="'".$val."'".",";

									}
									$tab=array();
									$whereIn=substr($whereIn, 1, -2);
									$res5=$prod->ajoutepanier($whereIn);
									foreach ($res5 as $val) {
										array_push($tab,$val);
									}
							
									$count=sizeof($_SESSION['cart']);
									
									
								?>
								
								<!-- Cart -->
								<div class="block-cart dropdown" >
									<div class="cart-title">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										<span class="cart-count"><?php echo sizeof($_SESSION['cart'])?></span>
									</div>
									
									<div class="dropdown-content">
										<div class="cart-content">
											<table>
												<tbody>
													<?php
															 
															
														
															 $tableau=array_count_values($_SESSION['cart']);
															 array_push($tableau,0);
															 $t=implode(',',$tableau);
															   
															  //print_r($t);
															  
															  
															
														foreach ($tab as $key =>  $va) {
															
															if($va[2]>0){
																$prix=$va[2];
															}
															else{
																$prix=$va[1];
															}
															
														
																
															
															
														?>
													<tr>
														<td class="product-image">
														<?php
																$im=explode(',',$va[4]) ;
																?>
															<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php  echo $va[0]?>">
																
																<img src="Freshmart-Organic-Food-Template/img/product1/<?php echo $im[0]?>"  alt="Product">
															
															</a>
															<?php 
															unset($im); 
															?>
														</td>
														<td>
															<div class="product-name">
																<a href="product-detail-left-sidebar.html"><?php echo $va[6] ?></a>
															</div>
															<div>
																
															<span class="quantite">
																
															 </span> <?php  
															
																$test=explode(',',$t);
																
																
																	echo $test[$key];

																
															
															 
															 ?>x <span class="product-price"><?php echo  $prix ; ?> dt</span>
															</div>
														</td>
														<td class="action">
															<a class="remove" href="Freshmart-Organic-Food-Template/php/controller/supppanier.php?id=<?php echo $va[0]?>&prix=<?php echo $prix ?>">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
															</a>
														</td>
													</tr>
													
													<?php

														
													        //unset($_SESSION['cart']);
														
													}
														?>
													
													<!-- <tr class="total">
														<td>Total:</td>
														<td colspan="2">
														
													</td>
													</tr> -->
													
													<tr>
														<td colspan="3">
															<div class="cart-button">
																<a class="btn btn-primary" href="Freshmart-Organic-Food-Template/product-cart.php" title="View Cart">View Cart</a>
																<a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<?php
									}
									else{
								?>

									<div class="block-cart dropdown" >
									<div class="cart-title">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										<span class="cart-count">0</span>
									</div>
									
									<div class="dropdown-content">
										<div class="cart-content">
											<table>
												<tbody>
													<tr>
													
														<td>
															panier vide
														</td>
													</tr>
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>

									<?php

									}
									?>
								
								<!-- My Account -->
								<div class="my-account dropdown toggle-icon">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="zmdi zmdi-menu"></i>
									</div>
									<div class="dropdown-menu">	
									<?php 
									
									if (isset($_SESSION['login']) && isset($_SESSION['pass'])){

										?>
										<div class="item">
											<a href="#" ><i class="fa fa-cog"></i><?php echo  $_SESSION["login"] ?>  </a>
										</div>
									<div class="item">
											<a href="Freshmart-Organic-Food-template/php/controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="Freshmart-Organic-Food-template/adminwork.php" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<?php
									}
									else if((isset($_SESSION['email'] )&& isset($_SESSION['motpass']))){
											?>
										<div class="item">
											<a href="#" ><i class="fa fa-cog"></i><?php echo  $_SESSION["email"] ?>  </a>
										</div>
									<div class="item">
											<a href="Freshmart-Organic-Food-template/php/controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="Freshmart-Organic-Food-template/compte.php" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<?php
									}
									else{
										?>
								
										<div class="item">
											<a href="Freshmart-Organic-Food-Template/user-login.php" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
										</div>
										<div class="item">
											<a href="Freshmart-Organic-Food-Template/user-register.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
										</div>
										<div class="item">
											<a href="Freshmart-Organic-template/whishlists.php" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
										</div>		
										<?php

									}
									?>
									
										<div class="item">
											<!-- Language -->
											<div class="language switcher">
												<a href="#" title="Language English" class="active"><img src="Freshmart-Organic-Food-Template/img/language-en.jpg" alt="Language English"></a>
												<a href="#" title="Language French"><img src="Freshmart-Organic-Food-Template/img/language-fr.jpg" alt="Language French"></a>
												<a href="#" title="Language Deutsch"><img src="Freshmart-Organic-Food-Template/img/language-de.jpg" alt="Language Deutsch"></a>
											</div>
											
											<!-- Currency -->
											<div class="currency switcher">
												<a href="#" title="USD" class="active">USD</a>
												<a href="#" title="EUR">EUR</a>
												<a href="#" title="GBP">GBP</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">				
				<!-- Slideshow -->
				<div class="section slideshow">
					<div class="container">
						<div class="tiva-slideshow-wrapper">
							<div id="tiva-slideshow" class="nivoSlider">
								<a href="#">
									<img class="img-responsive" src="Freshmart-Organic-Food-Template/img/slideshow/home3-slideshow-2.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="Freshmart-Organic-Food-Template/img/slideshow/home3-slideshow-3.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="Freshmart-Organic-Food-Template/img/slideshow/home4-slideshow-3.jpg" alt="Slideshow Image">
								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Payment Intro -->
				<div class="section payment-intro">
					<div class="container">
						<div class="payment-wrap">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="Freshmart-Organic-Food-Template/img/home1-payment-1.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Free Shipping item</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="Freshmart-Organic-Food-Template/img/home1-payment-2.png" alt="Payment Intro">
										</div>	
										<div class="item-right">
											<h3 class="title">Secured Payment</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="Freshmart-Organic-Food-Template/img/home1-payment-3.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Money Back Guarantee</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="Freshmart-Organic-Food-Template/img/home1-payment-4.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Express Shipping</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Product -->
				<div class="two-column">
					<div class="container row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">All <span>Products</span></h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										$image=[];
											foreach ($res as $key => $value) {
												if($value[2]>0){
													$prix=$value[2];
												}
												else{
													$prix=$value[1];
												}
													
										?>
									<div class="product-item">
											<div class="product-image">
											<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php 
														$image=explode(',',$value[4]);
													?>
													<img src="Freshmart-Organic-Food-Template/img/product1/<?php echo $image[0];unset($image);?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
											<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
												<?php echo $value[6];?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart"  href="Freshmart-Organic-Food-Template/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="Freshmart-Organic-FOOD-Template/php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<?php
										
											}
										?>
										
										
										
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Vegetables <span></span></h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php  
											foreach ($res1 as $key => $value) {
												
											
										?>
										<div class="product-item">
											<div class="product-image">
											<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
												<?php 
														$img=explode(',',$value[4]);
													?>
													<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>"><img src="Freshmart-Organic-Food-Template/img/product/<?php echo $img[0];unset($img); ?>" alt="Product Image"></a>
												</a>
											</div>
											
											<div class="product-title">
											<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php echo $value[6];?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="Freshmart-Organic-Food-Template/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="Freshmart-Organic-FOOD-Template/php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<?php
											}
										?>
										
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
		<!-- clowns fruits et juice-->
		<!-- Product -->
		<div class="two-column ">
					<div class="container row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Fruits <span></span></h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										foreach ($res2 as $key => $value) {
										
										
										
										?>
										<div class="product-item">
											<div class="product-image">
												<?php 
													$img=explode(",",$value[4]);
												?>
												<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<img src="Freshmart-Organic-Food-Template/img/product1/<?php echo $img[0];unset($img); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php
														echo $value[6];
													?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="Freshmart-Organic-Food-Template/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="Freshmart-Organic-FOOD-Template/php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
												<?php
										}
												?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Juice</h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										foreach ($res3 as $key => $value) {
										
										
										
										?>
										<div class="product-item">
											<div class="product-image">
												<?php 
													$img=explode(",",$value[4]);
												?>
												<a href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<img src="Freshmart-Organic-Food-Template/img/product1/<?php echo $img[0];unset($img); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php
														echo $value[6];
													?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="Freshmart-Organic-Food-Template/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="Freshmart-Organic-FOOD-Template/php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="Freshmart-Organic-Food-Template/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
												<?php
										}
												?>
									</div>
								</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Intro -->
				<div class="section intro">
					<div class="block-content">
						<div class="container">
							<div class="intro-wrap">
								<div class="row">
									<div class="col-lg-12 col-md-12 text-center">							
										<div class="intro-header">
											<h3>Why Choose Us</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud</p>
										</div>
										<div class="intro-social">
											<ul>
												<li><a href="#"><img src="Freshmart-Organic-Food-Template/img/intro-social-1.png" alt="Social Item"></a></li>
												<li><a href="#"><img src="Freshmart-Organic-Food-Template/img/intro-social-2.png" alt="Social Item"></a></li>
												<li><a href="#"><img src="Freshmart-Organic-Food-Template/img/intro-social-3.png" alt="Social Item"></a></li>
												<li><a href="#"><img src="Freshmart-Organic-Food-Template/img/intro-social-4.png" alt="Social Item"></a></li>
											</ul>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-6 top-left text-center">
										<div class="intro-item">
											<p><img src="Freshmart-Organic-Food-Template/img/intro-icon-1.png" alt="Intro Image"></p>
											<h4>Always Fresh</h4>
											<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-6 top-right text-center">
										<div class="intro-item">
											<p><img src="Freshmart-Organic-Food-Template/img/intro-icon-2.png" alt="Intro Image"></p>
											<h4>100% Natural</h4>
											<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-6 bottom-left text-center">
										<div class="intro-item">
											<p><img src="Freshmart-Organic-Food-Template/img/intro-icon-3.png" alt="Intro Image"></p>
											<h4>Super Healthy</h4>
											<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
																	
									<div class="col-lg-6 col-md-6 col-sm-6 bottom-right text-center">
										<div class="intro-item">
											<p><img src="Freshmart-Organic-Food-Template/img/intro-icon-4.png" alt="Intro Image"></p>
											<h4>Premium Quality</h4>
											<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<div class="container">
						<div class="footer-wrap">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
									<div class="block text">
										<div class="block-content">
											<a href="home-4.html" class="logo-footer">
												<img src="Freshmart-Organic-Food-Template/img/logo-3.png" alt="Logo">
											</a>
											
											<p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip.</p>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
									<div class="block newsletter">
										<h2 class="block-title">Newsletter</h2>
										
										<div class="block-content">
											<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
											<form action="#" method="post">
												<input type="text" placeholder="Enter Your Email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</form>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
									<div class="block text">
										<h2 class="block-title">Opening Hours</h2>
										
										<div class="block-content">
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
											<p>
												<strong>Monday To Friday</strong> : 8.00 AM - 8.00 PM<br>
												<strong>Satuday</strong> : 7.30 AM - 9.30 PM<br>
												<strong>Sunday</strong> : 7.00 AM - 10.00 PM
											</p>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
									<div class="block text">
										<h2 class="block-title">Contact Us</h2>
										
										<div class="block-content">
											<div class="contact">
												<p><strong>Address</strong> : 123 Suspendis matti, VST District, NY Accums, North American</p>
												<p><strong>Hotline</strong> : 012345678910 - 098765432100</p>
												<p><strong>Email</strong> : <a href="mailto:support@domain.com">support@domain.com</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<img src="Freshmart-Organic-Food-Template/img/payment.png" alt="Payment">
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
		
		<!-- Vendor JS -->
		<script src="Freshmart-Organic-Food-Template/libs/jquery/jquery.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/bootstrap/js/bootstrap.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/slider-range/js/tmpl.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/slider-range/js/draggable-0.1.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/slider-range/js/jquery.slider.js"></script>
		<script src="Freshmart-Organic-Food-Template/libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="Freshmart-Organic-Food-Template/js/main.js"></script>
	</body>
	


</html>					