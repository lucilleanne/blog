<?php include "header.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="row" style="padding-top: 20px">
					<div class="col-md-3">
						<?php include "teacher-left-menu.php" ?>
					</div>

							<div class="col-md-9">
								<form name="#" id="" method="post" action="">
									<div class="col-lg-10 col-lg-offset-1 panel-heading btn-text-style"><strong>Add New Book</strong></div>
									<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
										<div class="panel-body">
											<div class="row">
												<label for="" class="col-lg-2 control-label">Course: </label>
												<div class="col-lg-9">
													<div class="form-group">
														<select type="" class="form-control" value="" name="newcourse" id="newcourse" />
															<option>Math</option>
															<option>HTML</option>
															<option>JAVA</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<label for="" class="col-lg-2 control-label">Browse a new book: </label>
												<div class="col-lg-9">
													<div class="form-group">
														<input type="file" class="form-control" value="" name="newcourse" id="newcourse" />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3">
													<div class="form-group">
														<button class="btn btn-md btn-text-style btn-block" type="submit">SAVE</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>	
							</div>

					<div class="row">
						<div class="col-md-9 col-md-offset-3">
								<div class="col-lg-10 col-lg-offset-1 panel-heading btn-text-style"><strong>My Books</strong>
								</div>
								<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-3">
												<a href="#" target="_blank">
													<img src="images/book1.jpg" class="center-block " width="150" height="200">
													<div class="clearfix">&nbsp;</div>
												</a>
											</div>
											<div class="col-md-3">
												<a href="#" target="_blank">
													<img src="images/book2.jpg" class="center-block " width="150" height="200">
													<div class="clearfix">&nbsp;</div>
												</a>
											</div>
											<div class="col-md-3">
												<a href="#" target="_blank">
													<img src="images/book3.jpg" class="center-block " width="150" height="200">
													<div class="clearfix">&nbsp;</div>
												</a>
											</div>
											<div class="col-md-3">
												<a href="#" target="_blank">
													<img src="images/book4.jpg" class="center-block " width="150" height="200">
													<div class="clearfix">&nbsp;</div>
												</a>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	
<?php include "footer.php"?>