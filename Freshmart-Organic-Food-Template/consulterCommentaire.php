<?php

session_start();
require_once("php/model/Class/produit.php");
require_once("php/model/Class/comments.php");

$prod=new Produit();
$com=new Comments();
$res=$com->afficherNomClientBycommentaire();
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
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
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
											<a href="../index.php" title="Homepage">Home</a>
											
										</li>
										
										<li class="dropdown">
											<a href="product-grid-left-sidebar.php" title="Product">Product</a>
											<div class="dropdown-menu">
												<ul>
													<li class="has-image">
														<img src="img/product/product-category-1.png" alt="Product Category Image">
														<a href="product-grid-left-sidebarLegume.php" title="Vegetables">Vegetables</a>
													</li>
													<li class="has-image">
														<img src="img/product/product-category-2.png" alt="Product Category Image">
														<a href="product-grid-left-sidebarFruit.php" title="Fruits">Fruits</a>
													</li>
													
													<li class="has-image">
														<img src="img/product/product-category-4.png" alt="Product Category Image">
														<a href="product-grid-left-sidebarJuice.php" title="Juices">Juices</a>
													</li>
													
												</ul>
											</div>
										</li>
										
										<li class="dropdown">
											<a href="#" title="Page">Page</a>
											<div class="dropdown-menu">
												<ul>
													<li>
														<a href="product-cart.php" title="Cart">Cart</a>
													</li>
													<li>
														<a href="product-checkout.html" title="Checkout">Checkout</a>
													</li>
													<li class="dropdown-submenu">
														<a href="#" title="User">User</a>
														<div class="dropdown-menu level2">
															<ul>
																<?php
																if(isset($_SESSION['login'] )&& isset($_SESSION['pass']) ||  (isset($_SESSION['email'] )&& isset($_SESSION['motpass'])) ){
																?>
																<li><a href="php/controller/logout.php" title="Login">logout</a></li>
																<li><a href="compte.php" title="account">Account</a></li>
s
																<li><a href="whishlists.php" title="My Wishlists">My Wishlists</a></li>
																<?php 
																}
																else{
																		?>
																<li><a href="user-login.php" title="Login">Login </a></li>
																<li><a href="user-register.php" title="Register">Register</a></li>
																<li><a href="admin.php" title="My Account">Admin</a></li>
																<li><a href="whishlists.php" title="My Wishlists">My Wishlists</a></li>
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
													
													<li><a href="blog-grid-full-width.php?page=1" title="Blog Grid - Full Width">Blog Grid - Full Width</a></li>
													<li><a href="consulterCommentaire.php" title="Blog Grid - Full Width">Consulter des commentaires</a></li>
													
												</ul>
											</div>
										</li>
										<?php 
											if(isset($_SESSION['email'] )&& isset($_SESSION['motpass'])){
										?>
										<li>
											<a href="commentaire.php"> commentaires</a>
										</li>
										<?php
												}
										?>
										<li>
											<a href="page-contact.php">Contact</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->		
								<div class="logo">
									<a href="home-4.html">
										<img class="img-responsive" src="img/logo.png" alt="Logo">
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
															<a href="product-detail-left-sidebar.php?id=<?php  echo $va[0]?>">
																
																<img src="img/product1/<?php echo $im[0]?>"  alt="Product">
															
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
															<a class="remove" href="php/controller/supppanier.php?id=<?php echo $va[0]?>&prix=<?php echo $prix ?>">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
															</a>
														</td>
													</tr>
													
													<?php

														
													        //unset($_SESSION['cart']);
														
													}
														?>
													
												
													<tr>
														<td colspan="3">
															<div class="cart-button">
																<a class="btn btn-primary" href="product-cart.php" title="View Cart">View Cart</a>
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
											<a href="php/controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="adminwork.php" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<?php
									}
									else if((isset($_SESSION['email'] )&& isset($_SESSION['motpass']))){
											?>
										<div class="item">
											<a href="#" ><i class="fa fa-cog"></i><?php echo  $_SESSION["email"] ?>  </a>
										</div>
									<div class="item">
											<a href="php/controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="compte.php" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<?php
									}
									else{
										?>
								
										<div class="item">
											<a href="user-login.php" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
										</div>
										<div class="item">
											<a href="user-register.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
										</div>
										<div class="item">
											<a href="whishlists.php" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
										</div>		
										<?php

									}
									?>
									
										<div class="item">
											<!-- Language -->
											<div class="language switcher">
												<a href="#" title="Language English" class="active"><img src="img/language-en.jpg" alt="Language English"></a>
												<a href="#" title="Language French"><img src="img/language-fr.jpg" alt="Language French"></a>
												<a href="#" title="Language Deutsch"><img src="img/language-de.jpg" alt="Language Deutsch"></a>
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

				<!-- Latest News -->
				<div class="section latest-news layout-2">
					<div class="block-title">
						<h2 class="title">Our <span>Commentaires</span></h2>
						<div class="sub-title">Les commentaires de nos clients</div>
					</div>
					
					<div class="block-content">
						<div class="container">
                            <?php 
                             
                                foreach ($res as $key => $value) {
                                  
                            ?>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="blog-item">
										<div class="blog-image">
											<a href="blog-detail.html" class="zoom-effect">
												<img src="img/client.jpg" width="80px" alt="Blog Image">
											</a>		
										</div>
										<div class="blog-info">
											<div class="blog-time">
												<span><i class="zmdi zmdi-comments"></i> <?php echo $value[0] ?></span>
												<span><i class="zmdi zmdi-calendar-note"></i><?php echo date('Y-m-d')?></span>
											</div>
											<div class="blog-title"><a href="blog-detail.html"><?php echo $value[0]; echo  $value[1] ?></a></div>
											<div class="blog-desc"><?php echo $value[2] ?></div>
											
										</div>
									</div>
                                
								</div>
								<?php
                                }
                                ?>
							
							</div>
						</div>
					</div>
				</div>
			
			
			
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<div class="container">


								
								<div class="footer-bottom">
									<div class="row">											
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
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
										
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-right">
											<div class="block text">
												<h2 class="block-title">Contact Us</h2>
												
												<div class="block-content">
													<div class="contact">
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-home"></i>
															</div>
															<div>
																<span>123 Suspendis matti, VST District, NY Accums, North American</span>
															</div>
														</div>
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-phone-in-talk"></i>
															</div>
															<div>
																<span>0123-456-78910<br>0987-654-32100</span>
															</div>
														</div>
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-email"></i>
															</div>
															<div>
																<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>	
								</div>
									
								<div class="footer-copyright">
									<div class="row">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
							</div>
										</div>
										
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
											<div class="payment">
												<img src="img/payment.png" alt="Payment">
											</div>
										</div>
									</div>
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
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="js/main.js"></script>
	</body>


</html>