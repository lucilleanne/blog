<?php include "header.php"?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
			
				<div class="row" style="padding-top: 20px">
					<div class="col-md-3">
						<?php include "student-left-menu.php" ?>
					</div>

					<div class="col-md-9">
						<form name="#" id="" method="post" action="">
							<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
								<div class="panel-body">
									<div class="row">&nbsp;</div>
									<div class="row">
										<label for="" class="col-lg-2 control-label">Email Address</label>
										<div class="col-lg-9">
											<div class="form-group">
												<input type="email" class="form-control" value="john@mail.com" name="email" id="email" required/>
											</div>	
										</div>
									</div>
									<div class="row">
										<label for="" class="col-lg-2 control-label">Username</label>
										<div class="col-lg-9">
											<div class="form-group">
												<input type="text" class="form-control" value="johnnnydoe" name="username" id="username" disabled />
											</div>
										</div>
									</div>
									<div class="row">
										<label for="" class="col-lg-2 control-label">Password</label>
										<div class="col-lg-9">
											<div class="form-group">
												<input type="password" class="form-control" value="johnnnydoe" name="password" id="password" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-lg-offset-3">
											<div class="form-group">
												<button class="btn btn-md btn-text-style btn-block" type="submit">UPDATE</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>	
					</div>
					
				</div><!--row-->
								
			</div>
		</div>
	</div>
	
<?php include "footer.php"?>