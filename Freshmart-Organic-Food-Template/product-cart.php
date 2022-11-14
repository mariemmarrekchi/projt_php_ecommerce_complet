
<?php

session_start();
require_once("php/model/Class/produit.php");

$prod=new Produit();
@$id=$_GET['id'];
$som=0;

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
											<a href="product-grid-left-sidebar.html" title="Product">Product</a>
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
														<a href="product-checkout.php" title="Checkout">Checkout</a>
													</li>
													<li class="dropdown-submenu">
														<a href="#" title="User">User</a>
														<div class="dropdown-menu level2">
														<ul>
																<?php
																if(isset($_SESSION['login'] )&& isset($_SESSION['pass']) ||  (isset($_SESSION['email'] )&& isset($_SESSION['motpass'])) ){
																?>
																<li><a href="php/controller/logout.php" title="Login">logout</a></li>
																<li><a href="compte.php" title="Login">Account</a></li>

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
										if(isset($_SESSION['login'] )&& isset($_SESSION['pass']) ||  (isset($_SESSION['email'] )&& isset($_SESSION['motpass'])) ){
																?>
										<li>
											<a href="commentaire.php">commentaires</a>
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
									$tableau=array_count_values($_SESSION['cart']);
									array_push($tableau,0);
									$test=implode(',',$tableau);
									
									
									
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
															 
															
															
														foreach ($tab as $key =>  $value) {
															
															if($value[2]>0){
																$prix=$value[2];
															}
															else{
																$prix=$value[1];
															}
															
														?>
													<tr>
														<td class="product-image">
														<?php
																$im=explode(',',$value[4]) ;
																?>
															<a href="product-detail-left-sidebar.php?id=<?php  echo $value[0]?>">
																
																<img src="img/product1/<?php echo $im[0]?>"  alt="Product">
															
															</a>
															<?php 
															unset($im); 
															?>
														</td>
														<td>
															<div class="product-name">
																<a href="product-detail-left-sidebar.html"><?php echo $value[6] ?></a>
															</div>
															<div>
																
															<span class="quantite">
															<?php
                                                            $t=explode(',',$test);
															echo $t[$key];
                                                            ?>
															
															 </span>x <span class="product-price"><?php echo  $prix?> dt</span>
															</div>
														</td>
														<td class="action">
															<a class="remove" href="php/controller/removePanierCart.php?id=<?php echo $value[0]?>&prix=<?php echo $prix?>">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
															</a>
														</td>
													</tr>
													
													<?php
													// unset($_SESSION['cart']);
														}
														?>
													
												
													
													<tr>
														<td colspan="3">
															<div class="cart-button">
																<a class="btn btn-primary" href="#" title="View Cart">View Cart</a>
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
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="../index.php" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-80 text-center">Image</th>
										<th>Name</th>
										<th class="width-100 text-center">Unit price</th>
										<th class="width-100 text-center">Qty</th>
										<th class="width-100 text-center">Total</th>
									</tr>
								</thead>
								
								<tbody>
									<?php 

									foreach ($tab as $key => $value) {
										if($value[2]>0){
											$prix=$value[2];
										}else{
											$prix=$value[1];
										}
														
										?>
									<tr >
										<td class="product-remove" >
											<a title="Remove this item" class="remove" href="php/controller/removePanierCart.php?id=<?php echo $value[0]?>&prix=<?php echo $prix ?>">
												<i class="fa fa-times"></i>
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.php?id=<?php echo $value[0]?>">
											<?php $image=explode(',',$value[4]);?>
												<img width="80" alt="Product Image" class="img-responsive" src="img/product1/<?php echo $image[0];unset($image); ?>">
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html" class="product-name"><?php echo $value[6];?></a>
										</td>
										<td class="text-center">
											<?php  echo $prix?>
										</td>
										<td>
											<div class="product-quantity">
												<div class="qty">
													<div class="input-group">
													<?php
                                                            $t=explode(',',$test);
															echo $t[$key];
                                                            ?>
                                                        
													</div>
												</div>
											</div>
										</td>
										<td class="text-center">
										<?php
                                                            
															echo $t[$key]*$prix;
                                                            ?>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
								
								<tfoot>
									
									<tr class="cart-total">
										<td colspan="2" class="total text-right">Total</td>
										<td colspan="4" class="total text-center"><?php  echo $som;?></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
						<div class="checkout-btn">
							<a href="product-checkout.html" class="btn btn-primary pull-right" title="Proceed to checkout">
								<span>Proceed to checkout</span>
								<i class="fa fa-angle-right ml-xs"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="../index.php" class="logo-footer">
												<img src="img/logo-2.png" alt="Logo">
											</a>
									
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>123 Suspendis matti, VST District, NY Accums, North American</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>0123-456-78910<br>0987-654-32100</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Photo Instagram</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-1.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-2.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-3.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-4.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-5.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-6.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-7.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-8.png" alt="Instagram Image">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
										
									<div class="block social">
										<h2 class="block-title">Follow Us</h2>
										
										<div class="block-content">
											<ul>
												<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-1.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Free Shipping item</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-2.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Secured Payment</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-3.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Money Back Guarantee</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
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
									<span>Payment Accept</span>
									<img src="img/payment.png" alt="Payment">
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