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
															 $t=implode(',',$tableau);
															   
															  
															  //print_r($tableau);
															  
															
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
																
																<img src="Freshmart-Organic-Food-Template/img/product1/<?php echo $im[0]?>"  alt="Product">
															
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
																
															 </span> <?php  
															
																$test=explode(',',$t);
																
																foreach ($test as $key => $t) {
																	echo $test[$key][0];
																}
																
															
															 
															 ?>x <span class="product-price"><?php echo  $prix ; ?> dt</span>
															</div>
														</td>
														<td class="action">
															<a class="remove" href="Freshmart-Organic-Food-Template/php/controller/supppanier.php?id=<?php echo $value[0]?>&prix=<?php echo $prix ?>">
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
								