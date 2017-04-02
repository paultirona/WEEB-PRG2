<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/signupCSS.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts col-xs-12 col-md-8-->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Log In</title>
	</head>
	<body>
		<div class="container">
	
			<div class="row main row-centered">
			
				<div class="col-xs-6 col-md-offset-3">

					<div class="panel-heading">
					   <div class="panel-title text-center">
							<h1 class="title">OGS Philippines</h1>	
						</div>
					</div> 
					<div class="main-login main-center" style="margin-bottom:50px;">
					
					
						<span class="text-danger"><?php echo form_error('username'); ?></span>
									
						<span class="text-danger"><?php echo form_error('password'); ?></span>
								
					
						<form class="form-horizontal" method="post" action='<?php echo base_url();?>index.php/Account/login_validation'>
	
	
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
						
										<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" value="<?php echo set_value('username'); ?>"/>
															
										
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
				
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" value="<?php echo set_value('password'); ?>"/>
										
								
									</div>
								</div>
							</div>
							
							<div class="container-fluid">
							
				
								<div class="row row-centered">
				
									<div class="form-group login-register col-xs-1">
									
										<a href='<?php echo base_url()."index.php/account/home"?>'>
											<button type ="button" class="btn btn-primary btn-lg login-button btn-danger" href="<?php echo base_url()?>index.php/Account/home"   onclick="<?php echo base_url()?>index.php/Account/home">Back</button>
										</a>
																			 
									</div>
									
									
									<div class="col-xs-1 col-xs-offset-6">
									</div>
										
									<div class="form-group login-register col-xs-1">
																	
										<button type="submit" class="btn btn-primary btn-lg login-button btn-success" value="Login">Login</button>
									
									</div>
									
								</div>
							</div>
							
							
						</form>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	</body>
</html>