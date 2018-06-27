<?php
	include ("controllers/change-password.php");

?>


<div class="container">
			<div class="row">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Change password</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="">
					<?php 
						if (isset ($_POST['change_password'])) {
							echo $kq;
						}
					?>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Old Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="old_password" id="old_password"  placeholder="Enter your Password" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">New Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="new_password" id="new_password"  placeholder="Enter your Password" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="repassword" id="repassword"  placeholder="Confirm your Password" required />
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="change_password" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
						</div>
						<div class="login-register">
				            <a href="index.php?view=login"></a>
				         </div>
					</form>
				</div>
			</div>
			
		</div>