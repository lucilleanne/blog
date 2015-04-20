<?php include "header.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="text-right">
					<a href="student-add-course-step2.php"><button class="btn btn-md btn-text-style" type="submit">Add New Book</button></a>
				</div>
				<div class="row" style="padding-top: 20px">
					<div class="col-md-3">
						<?php include "student-left-menu.php" ?>
					</div>
					<div class="col-md-9">
						<form name="#" id="" method="post" action="">
							<div class="col-lg-10 col-lg-offset-1 panel-heading btn-text-style"><strong>My Books</strong>
							</div>
							<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<a href="student-pdf.php" target="_blank">
												<img src="images/book1.jpg" class="center-block " width="150" height="200">
												<div class="clearfix">&nbsp;</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="student-pdf.php" target="_blank">
												<img src="images/book2.jpg" class="center-block " width="150" height="200">
												<div class="clearfix">&nbsp;</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="student-pdf.php" target="_blank">
												<img src="images/book3.jpg" class="center-block " width="150" height="200">
												<div class="clearfix">&nbsp;</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="student-pdf.php" target="_blank">
												<img src="images/book4.jpg" class="center-block " width="150" height="200">
												<div class="clearfix">&nbsp;</div>
											</a>
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