<?php
	include ("controllers/access-login.php");
	if (isset($_SESSION['login'])) {
		echo '<script type="text/javascript">
				window.location.href="index.php";
				
			</script>';
	
	}

?>


<div class="container">
			<div class="row">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Dota2 Community</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="index.php?view=login">
						<div class="form-group">
							<?php
								if (isset ($_POST['login'])) {
									echo $kq;
								}
							?>
						</div>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username	" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Confirm your Password" required />
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="login" class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
						<div class="login-register">
				            <a href="index.php?view=register">Register</a>
				         </div>
						
					</form>
				</div>
			</div>
			
		</div>