<?php include "header.php"?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="row" style="padding-top: 20px">
				<h4 class="form-signin-heading text-center">Please sign in</h4>
					<form name="teacher-form-add" id="teacher-form-add" method="post" action="" class="form-signin">
							<div class="col-lg-4 col-lg-offset-4">
							<label for="inputUsername" class="sr-only">Username</label>
								<div class="form-group">
									<input id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" type="text">
								</div>
							</div>
							<div class="col-lg-4 col-lg-offset-4">
							<label for="inputPassword" class="sr-only">Password</label>
								<div class="form-group">
									<input id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="" type="password">
								</div>
							</div>
							<div class="col-lg-4 col-lg-offset-4">
								<div class="form-group">
									<a href="teacher-profile.php"><button class="btn btn-md btn-text-style btn-block" type="submit">Sign in as Teacher</button></a>
								</div>
							</div>
							<div class="col-lg-4 col-lg-offset-4">
								<div class="form-group">
									<a href="student-profile.php"><button class="btn btn-md btn-text-style btn-block" type="submit">Sign in as Student</button></a>
								</div>
							</div>
					</form>				
				</div>
			</div><!-- /.container -->
			
		</div>	
	</div>	
	
<?php include "studentmodal.php"?>
<?php include "footer.php"?>