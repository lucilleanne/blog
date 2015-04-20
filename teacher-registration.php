<?php include "header.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="row" style="padding-top: 20px">

					<form name="teacher-form-add" id="teacher-form-add" method="post" action="">
						<div class="col-lg-10 col-lg-offset-1 panel-heading bg-primary btn-text-style"><strong>Teachers Registration</strong></div>
							<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
									<div class="col-lg-12 panel-heading" style="color: #36697E"><strong>Personal Details</strong></div>
										<div class="panel-body">
											<div class="row">&nbsp;</div>
											<div class="row">
												<label for="" class="col-lg-1 control-label">Firstname</label>
												<div class="col-lg-5">
													<div class="form-group">
														<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Input First Name" required/>
													</div>
												</div>
												<label for="" class="col-lg-1 control-label">Lastname</label>
												<div class="col-lg-5">
													<div class="form-group">
														<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Input Last Name" required />
													</div>
												</div>
											</div>
											<div class="row">
												<label for="" class="col-lg-1 control-label">Username</label>
												<div class="col-lg-5">
													<div class="form-group">
														<input type="text" class="form-control" name="username" id="username" placeholder="Input Username" required />
													</div>
												</div>
												<label for="" class="col-lg-1 control-label">Password</label>
												<div class="col-lg-5">
													<div class="form-group">
														<input type="password" class="form-control" name="password" id="password" placeholder="Input Password" required/>
													</div>
												</div>
											</div>

											<div class="row">
												<label for="" class="col-lg-1 control-label">Country</label>
												<div class="col-lg-5">
													<select class="form-control" id="country">
														<option value="aus" >Australia</option>
														<option value="phil" >Philippines</option>
													</select>	
												</div>
												<label for="" class="col-lg-1 control-label">Age</label>
												<div class="col-lg-5">
													<input type="text" class="form-control" name="age" id="age" placeholder="Input Age" required/>
												</div>
											</div>
											<div class="row">&nbsp;</div>
											<div class="row">
												<label for="" class="col-lg-1 control-label">Email</label>
													<div class="col-lg-5">
														<input type="email" class="form-control" name="email" id="email" placeholder="Input Email" required/>
													</div>
											</div>
											<div class="row">&nbsp;</div>
											
											<hr>		
												<div class="col-lg-12 panel-heading" style="color: #36697E"><strong>Career Details</strong></div>
												<div class="panel-body">
													<div class="row">&nbsp;</div>
													<div class="row">
														<label for="" class="col-lg-1 control-label">Major</label>
															<div class="col-lg-5">
																<div class="form-group">
																	<input type="text" class="form-control" name="major" id="major" placeholder="Major Subject" required/>
																</div>
															</div>
															<label for="" class="col-lg-1 control-label">Degree</label>
																<div class="col-lg-5">
																	<select class="form-control" id="degree">
																		<option value="it" >Information Technology</option>
																		<option value="bsm" >BS Management</option>
																	</select>	
																</div>
													</div>
													<div class="row">&nbsp;</div>
													<div class="row">
														<label for="" class="col-lg-5 control-label">Are you part of Institution or University? If yes,please enter your Institution</label>
														<div class="col-lg-7">
															<div class="form-group">
																<input type="text" class="form-control" name="employer" id="employer" placeholder="Institution or University" required/>
															</div>
														</div>
													</div>
													<div class="row">&nbsp;</div>
													<div class="row">&nbsp;</div>
													<div class="col-lg-12 text-right">
														<button type="submit" class="btn text-right btn-text-style" name="save">REGISTER</button>
													</div>
												</div>
											

										</div>
							</div>
					</form>				
				</div>
			</div><!-- /.container -->
			
		</div>	
	</div>	
	
<?php include "studentmodal.php" ?>
<?php include "footer.php" ?>