<?php include "header.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="row" style="padding-top: 20px">
					<div class="col-md-3">
						<?php include "teacher-left-menu.php" ?>
					</div>
					<div class="col-md-9">
						<div class="row" style="padding-top: 20px">
						<div class="col-md-10 col-md-offset-1 panel-heading btn-text-style"><strong>Courses</strong></div>
							<div class="col-lg-10 col-lg-offset-1" style="background-color: #FBFBF9">
								<div class="table-responsive">
									<table class=" table table-responsive table-hovered table-bordered">
										<th>ID</th>
										<th>NAME</th>
										<tr>
											<td>1</td>
											<td>PHP</td>
										</tr>
										<tr>
											<td>2</td>
											<td>HTML</td>
										<tr>
											<td>3</td>
											<td>CSS</td>
										</tr>
										<tr>
											<td>4</td>
											<td>MYSQL</td>
										</tr>	
										</tr>	
									</table>	
								</div>
							</div>
						</div><!--row-->
					</div>

					<div class="col-md-9 col-md-offset-3">
						<form name="#" id="" method="post" action="">
							<div class="col-lg-10 col-lg-offset-1 panel-heading btn-text-style"><strong>Add New Course</strong></div>
							<div class="col-lg-10 col-lg-offset-1 form-group well" style="background-color: #FBFBF9">
								<div class="panel-body">
									<div class="row">
										<label for="" class="col-lg-2 control-label">Name: </label>
										<div class="col-lg-9">
											<div class="form-group">
												<input type="text" class="form-control" value="" name="newcourse" id="newcourse" />
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
				</div><!--row-->

			</div>
		</div>
	</div>
	
<?php include "footer.php"?>