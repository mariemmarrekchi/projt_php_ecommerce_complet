 <!-- Modal 2 -->
 <div class="modal fade" id="exampleModal1<?php echo $value[0]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form action="php/controller/updateProduit.php" enctype="multipart/form-data" method="post" >
						
								<div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" value="<?php echo $value[0] ?>">
										
									</div>

								<div class="form-group">
										<label for="exampleInputName">Nom de produit</label>
										<input type="text" class="form-control" name="nom" value="<?php echo $value[6] ?>" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter nom produit">
										<small id="nameHelp" class="form-text text-muted">enter nom du produit </small>
									</div>

									<div class="form-group">
										<label for="prixupdate">Prix de produit</label>
										<input type="number" class="form-control" id="prixupdate" value="<?php echo $value[1]; ?>" name="prixupdate" aria-describedby="prixHelp" placeholder="Enter prix produit">
										<small id="prixHelp" class="form-text text-muted">enter prix du produit </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">Solde de produit</label>
										<input type="number" class="form-control" value="0" id="exampleInputSolde" value="<?php echo $value[2]; ?>" name="soldeupdate" aria-describedby="soldeHelp" placeholder="Enter solde produit">
										<small id="soldeHelp" class="form-text text-muted">enter solde du produit </small>
									</div>

									<div class="form-group">
										<label for="exampleInputDes"> Description de produit </label>
								<textarea class="form-control" id="exampleInputDes" name="description"  >
								<?php echo $value[3]; ?>	
							</textarea>
										<small id="desHelp" class="form-text text-muted">enter description du produit </small>
									</div>

									<div class="form-group">
										<label for="exampleInputcat" >Categorie de produit</label>
										<select name="categorie"  selected class="form-control">
											<option selected value="<?php echo $value[5]; ?>"><?php echo $value[5]; ?></otpion>
											<?php 
												if ($value[5]=="vegtables"){
													echo '<option value="fruits" >Fruits</otpion>';
													echo '<option value="juice"> juice</otpion>';
													
												}
												else if ($value[5]=="fruits"){
													echo '<option value="vegtables" >vegtables</otpion>';
													echo '<option value="juice"> juice</otpion>';
												}
												else{
													echo '<option value="fruits" >Fruits</otpion>';
													echo '<option value="vegtables"> vegtables</otpion>';
												}
											?>
											
										</select>
										
									</div>



									<div class="form-group">
										<?php
												$pieces=explode(",",$value[4]);
												
												?>
										<label for="exampleInputImage">Image</label>
										
										<input type="file" class="form-control" value="<?php echo $pieces[0]?>"  id="exampleInputImage"  accept="image/*"  name="imageupdate[]" multiple >
										<span  value="<?php echo $pieces[0]?>" name="old"> <img src="img/product1/<?php echo $pieces[0]?>" width="80px"/></span>
										<? unset($pieces);?>
									</div>
																		
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
									</div>
								</div>
								</div>