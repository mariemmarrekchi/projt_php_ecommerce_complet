<?php
	session_start();
	require_once("php/model/Class/produit.php");
	require_once("php/model/Class/admin.php");
	// if (isset($_SESSION['login'])&& isset($_SESSION['pass']))
	// 	{
	// $admin=new admin();
	// $rech=$admin->verifAdmin($_SESSION['login'],$_SESSION['pass']);
	// $n=$rech->fetchColumn(0);
	// if($n==0){
	// header("location:admin.php");
	// }else{
	$prod=new Produit();
	$res=$prod->afficherProduitById($_GET['id']);
	$res2=$prod->afficherProduit();
	
		
	
	
	
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
						<h2 class="title">Organic Strawberry Fruits</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Fruit">Fruit</a></li>
							<li><span>Tomato</span></li>
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="row">
						<!-- Sidebar -->
						<div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- Block - Product Categories -->
							<div class="block product-categories">
								<h3 class="block-title">Categories</h3>
								
								<div class="block-content">
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
										<div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Tomato</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Broccoli</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Cabbage</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Cucumber</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
										<div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Orange</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Apple</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Banana</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Strawberry</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
										<div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Orange Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Tomato Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Apple Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Peaches Juices</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
									</div>
								</div>
							</div>
							
							
							<!-- Block - Products -->
							<div class="block products-block layout-5">
								<h3 class="block-title">Best Seller</h3>
							
								<div class="block-content">
									<div class="product-item">
										<div class="row">
											<div class="col-md-4 col-sm-12 col-xs-12 product-left">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img class="img-responsive" src="img/product/4.jpg" alt="Product Image">
													</a>
												</div>
											</div>
											
											<div class="col-md-8 col-sm-12 col-xs-12 product-right">
												<div class="product-info">
													<div class="product-title">
														<a href="product-detail-left-sidebar.html">
															Organic Strawberry Fruits
														</a>
													</div>
													
													<div class="product-rating">
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star"></div>
														<span class="review-count">(3 Reviews)</span>
													</div>
													
													<div class="product-price">
														<span class="sale-price">$45.00</span>
														<span class="base-price">$38.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="product-item">
										<div class="row">
											<div class="col-md-4 col-sm-12 col-xs-12 product-left">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img class="img-responsive" src="img/product/30.jpg" alt="Product Image">
													</a>
												</div>
											</div>
											
											<div class="col-md-8 col-sm-12 col-xs-12 product-right">
												<div class="product-info">
													<div class="product-title">
														<a href="product-detail-left-sidebar.html">
															Organic Strawberry Fruits
														</a>
													</div>
													
													<div class="product-rating">
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<span class="review-count">(3 Reviews)</span>
													</div>
													
													<div class="product-price">
														<span class="sale-price">$75.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="product-item">
										<div class="row">
											<div class="col-md-4 col-sm-12 col-xs-12 product-left">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img class="img-responsive" src="img/product/24.jpg" alt="Product Image">
													</a>
												</div>
											</div>
											
											<div class="col-md-8 col-sm-12 col-xs-12 product-right">
												<div class="product-info">
													<div class="product-title">
														<a href="product-detail-left-sidebar.html">
															Organic Strawberry Fruits
														</a>
													</div>
													
													<div class="product-rating">
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star on"></div>
														<div class="star"></div>
														<span class="review-count">(3 Reviews)</span>
													</div>
													
													<div class="product-price">
														<span class="sale-price">$80.00</span>
														<span class="base-price">$90.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Product Tags -->
							<div class="block tags product-tags">
								<h3 class="block-title">Product Tags</h3>
							
								<div class="block-content">
									<ul>
										<li><a href="#" title="Show products matching tag Hot Trend">Hot Trend</a></li>
										<li><a href="#" title="Show products matching tag Jewelry">Jewelry</a></li>
										<li><a href="#" title="Show products matching tag Man">Man</a></li>
										<li><a href="#" title="Show products matching tag Party">Party</a></li>
										<li><a href="#" title="Show products matching tag SamSung">SamSung</a></li>
										<li><a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a></li>
										<li><a href="#" title="Show products matching tag Shoes">Shoes</a></li>
										<li><a href="#" title="Show products matching tag Summer">Summer</a></li>
										<li><a href="#" title="Show products matching tag Sweaters">Sweaters</a></li>
										<li><a href="#" title="Show products matching tag Winter">Winter</a></li>
										<li><a href="#" title="Show products matching tag Woman">Woman</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="product-detail">
								<div class="products-block layout-5">
									<div class="product-item">
										<div class="product-title">
											Organic Strawberry Fruits <?php $tab=array(); foreach ($res as $key => $value) {
												echo $value[6]; 
												$pieces=explode(",",$value[4]);
												
												?>
											
										</div>
													
										<div class="row">
											<div class="product-left col-md-5 col-sm-5 col-xs-12">
												<div class="product-image horizontal">
													<div class="main-image">
														<img class="img-responsive" src="img/product1/<?php echo $pieces[0]?>" alt="Product Image">
													</div>
													<div class="thumb-images owl-theme owl-carousel">
														<?php 
														for ($i=0; $i <count($pieces) ; $i++) { 
														?>
														<img class="img-responsive" src="img/product1/<?php echo $pieces[$i] ?>"  width="80px" alt="Product Image">
														<?php  }?>
													</div>
												</div>
											</div>

											<div class="product-right col-md-7 col-sm-7 col-xs-12">
												<div class="product-info">
													<div class="product-price">
														<span class="sale-price">$<?php echo $value[2]; ?></span>
														<span class="base-price">$<?php echo $value[1]; ?></span>
													</div>
													
													<div class="product-stock">
														<span class="availability">Availability :</span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
													</div>
													
													<div class="product-short-description">
														<?php echo $value[3]; ?>
													</div>
													<?php
											} ?>
													<div class="product-variants border-bottom">
														<div class="product-variants-item">
															<span class="control-label">Size :</span>
															<select>
																<option value="1" title="S">S</option>
																<option value="2" title="M">M</option>
																<option value="3" title="L">L</option>
																<option value="4" title="One size">One size</option>
															</select>
														</div>

														<div class="product-variants-item">
															<span class="control-label">Color :</span>

															<ul>
																<li>
																	<input class="input-color" type="radio" value="1">
																	<span class="color" style="background-color: #E84C3D"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="2">
																	<span class="color" style="background-color: #5D9CEC"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="3">
																	<span class="color" style="background-color: #A0D468"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="4">
																	<span class="color" style="background-color: #F1C40F"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="5">
																	<span class="color" style="background-color: #964B00"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="6">
																	<span class="color" style="background-color: #FCCACD"></span>
																</li>
															</ul>
														</div>
													</div>
													
													<div class="product-add-to-cart border-bottom">
														<div class="product-quantity">
															<span class="control-label">QTY :</span>
															<div class="qty">
																<div class="input-group">
																	<input type="text" name="qty" value="1" data-min="1">
																	<span class="adjust-qty">
																		<span class="adjust-btn plus">+</span>
																		<span class="adjust-btn minus">-</span>
																	</span>
																</div>
															</div>
														</div>
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																<span>Add To Cart</span>
															</a>
															
															<a class="add-wishlist" href="#">
																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
														</div>
													</div>
													
													<div class="product-share border-bottom">
														<div class="item">
															<a href="#"><i class="zmdi zmdi-share" aria-hidden="true"></i><span class="text">Share</span></a>
														</div>
														<div class="item">
															<a href="#"><i class="zmdi zmdi-email" aria-hidden="true"></i><span class="text">Send to a friend</span></a>
														</div>
														<div class="item">
															<a href="#"><i class="zmdi zmdi-print" aria-hidden="true"></i><span class="text">Print</span></a>
														</div>
													</div>
													
													<div class="product-review border-bottom">
														<div class="item">
															<div class="product-quantity">
																<span class="control-label">Review :</span>
																<div class="product-rating">
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star"></div>
																</div>
															</div>	
														</div>
														
														<div class="item">
															<a href="#"><i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Read Reviews (3)</span></a>
														</div>
														
														<div class="item">
															<a href="#"><i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span></a>
														</div>
													</div>
													
													<div class="product-extra">
														<div class="item">
															<span class="control-label">Review :</span><span class="control-label">E-02154</span>
														</div>
														<div class="item">
															<span class="control-label">Categories :</span>
															<a href="#" title="Vegetables">Vegetables,</a>
															<a href="#" title="Fruits">Fruits,</a>
															<a href="#" title="Apple">Apple</a>
														</div>
														<div class="item">
															<span class="control-label">Tags :</span>
															<a href="#" title="Vegetables">Hot Trend,</a>
															<a href="#" title="Fruits">Summer</a>			
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="product-tab">
											<!-- Tab Navigation -->
											<div class="tab-nav">
												<ul>
													<li class="active">
														<a data-toggle="tab" href="#description">
															<span>Description</span>
														</a>
													</li>
													<li>
														<a data-toggle="tab" href="#additional-information">
															<span>Additional Information</span>
														</a>
													</li>
													<li>
														<a data-toggle="tab" href="#review">
															<span>Review</span>
														</a>
													</li>
												</ul>
											</div>
											
											<!-- Tab Content -->
											<div class="tab-content">
												<!-- Description -->
												<div role="tabpanel" class="tab-pane fade in active" id="description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
												</div>
												
												<!-- Product Tag -->
												<div role="tabpanel" class="tab-pane fade" id="additional-information">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
												</div>
												
												<!-- Review -->
												<div role="tabpanel" class="tab-pane fade" id="review">
													<div class="reviews">
														<div class="comments-list">
															<div class="item d-flex">
																<div class="comment-left">
																	<div class="avatar">
																		<img src="img/avatar.jpg" alt="" width="70" height="70">
																	</div>
																	<div class="product-rating">
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																	</div>
																</div>
																<div class="comment-body">
																	<div class="comment-meta">
																		<span class="author">Peter</span> - <span class="time">June 02, 2018</span>
																	</div>
																	<div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
																</div>
															</div>
															
															<div class="item d-flex">
																<div class="comment-left">
																	<div class="avatar">
																		<img src="img/avatar.jpg" alt="" width="70" height="70">
																	</div>
																	<div class="product-rating">
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star"></div>
																	</div>
																</div>
																<div class="comment-body">
																	<div class="comment-meta">
																		<span class="author">Merry</span> - <span class="time">June 17, 2018</span>
																	</div>
																	<div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
																</div>
															</div>
														</div>
														
														<div class="review-form">
															<h4 class="title">Write a review</h4>
															
															<form action="#" method="post" class="form-validate">
																<div class="form-group">
																	<div class="text">Your Rating</div>
																	<div class="product-rating">
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																	</div>
																</div>
																
																<div class="form-group">
																	<div class="text">You review<sup class="required">*</sup></div>
																	<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
																</div>
																
																<div class="form-group">
																	<button class="btn btn-primary">Send your review</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Related Products -->
							<div class="products-block related-products">
								<div class="block-title">
									<h2 class="title">Related <span>Products</span></h2>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 

											foreach ($res2 as $key => $value) {
											
											
?>
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<?php 
														$image=explode(',',$value[4]);
													?>
													<img src="img/product1/<?php echo $image[0];unset($image); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="#">
													<?php echo $value[6] ?>
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
											<a href="index.html" class="logo-footer">
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
<?php
    // }
// }
?> 