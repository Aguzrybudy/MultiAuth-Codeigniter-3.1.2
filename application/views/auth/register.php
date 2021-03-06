<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
	</head>
	<body>

	<div class="container">
			<div class="row">
				<?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert">
							<?= validation_errors() ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert">
							<?= $error ?>
						</div>
					</div>
				<?php endif; ?>
				
				
				<div class="col-md-6 box-register col-md-offset-3">
					<div class="page-header">
						<h1>Register</h1>
					</div>
					
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item active"><a href="#tab-admin" role="tab" data-toggle="tab">Admin</a></li>
					  <li class="nav-item"><a href="#tab-user" role="tab" data-toggle="tab">User</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					
					  <div class="tab-pane active" id="tab-admin">
						<form method="post" action="<?=base_url();?>login/register_admin_save">
						<div class="form-group">
							<label for="username">Username (admin)</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
							<p class="help-block">At least 4 characters, letters or numbers only</p>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
							<p class="help-block">A valid email address</p>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
							<p class="help-block">At least 6 characters</p>
						</div>
						<div class="form-group">
							<label for="password_confirm">Confirm password</label>
							<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
							<p class="help-block">Must match your password</p>
						</div>
						<div class="form-group">
						   <input type="reset" value="Cancel" class="btn btn-danger" onclick="self.history.back();">
							<input type="submit" class="btn btn-primary" value="Register">
						</div>
					</form>
					  </div>
					  
					  <div class="tab-pane" id="tab-user">
					  
					  <form method="post" action="<?=base_url();?>login/register_user_save">
						<div class="form-group">
							<label for="username">Username(user)</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
							<p class="help-block">At least 4 characters, letters or numbers only</p>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
							<p class="help-block">A valid email address</p>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
							<p class="help-block">At least 6 characters</p>
						</div>
						<div class="form-group">
							<label for="password_confirm">Confirm password</label>
							<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
							<p class="help-block">Must match your password</p>
						</div>
						<div class="form-group">
						   <input type="reset" value="Cancel" class="btn btn-danger" onclick="self.history.back();">
							<input type="submit" class="btn btn-primary" value="Register">
						</div>
					</form>
					  
					  </div>
					  
					</div>

					
				</div>
			</div><!-- .row -->
		</div><!-- .container -->

		<!-- jQuery -->
		<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>public/js/bootstrap.js"></script>
	</body>
</html>