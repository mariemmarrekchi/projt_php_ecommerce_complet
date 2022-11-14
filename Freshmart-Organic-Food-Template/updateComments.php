 <!-- Modal 2 -->
 <div class="modal fade" id="exampleModal1<?php echo $value[0]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">verifier Commentaire</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form action="php/controller/updateComments.php"  method="post" >
						
								<div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" value="<?php echo $value[0] ?>">
										
									</div>

								<div class="form-group">
										<label for="exampleInputName">Nom de client</label>
										<input type="text" class="form-control" name="nom" readonly value="<?php echo $value[1] ?>"  >
										
									</div>

									<div class="form-group">
										<label for="prixupdate">Prénom de client</label>
										<input type="text" readonly class="form-control"  value="<?php echo $value[2]; ?>"  >
										
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">Commentiare</label>
										<textarea  class="form-control" readonly  >
                                        <?php echo $value[3]; ?>
										</textarea>
									</div>

									<div class="form-group">
										<label for="exampleInputcat" >Etat de commentaire</label>
										<select  name="accept"  class="form-control">

											<option selected value="<?php echo $value[4]; ?>"><?php if ( $value[4]==0) echo "refuser" ; else echo "accepter";?> </otpion>
                                            <?php 
                                                if ($value[4]==0){
                                                    echo " <option value='1' >accepter</otpion>";
                                                }
                                                else{
                                                    echo 	"<option value='0' >refuser</otpion>";
                                                }
                                            ?>
										
											
										</select>
										
									</div>



																		
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										
									</div>
									</div>
								</div>
								</div>