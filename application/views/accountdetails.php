<?php
?>

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

		<title>Your Profile</title>
	</head>
	<body>
		<div class="container">

			<div class="row main row-centered">

				<div class="col-xs-6 col-md-offset-3">
		
					<div class="panel-heading">
					   <div class="panel-title text-center">
							<h1 class="title"><?php echo $this->session->userdata('username')?>'s Profile</h1>
						</div>
					</div>
					<div class="main-login main-center" style="margin-bottom:50px;">
						<form class="form-horizontal" method="post" action="#">

							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Your Name</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" value=""/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="Lorem Ipsum@yahoo.com"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Old Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Old Password"/>
									</div>
								</div>
							</div>

              <div class="form-group">
								<label for="password" class="cols-sm-2 control-label">New Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your New Password"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirm New Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your New Password"/>
									</div>
								</div>
							</div>

							<div class="container-fluid">


								<div class="row row-centered">

									<div class="form-group login-register col-xs-1">

										<button type ="button" class="btn btn-primary btn-lg login-button btn-danger" href="home.html">Back</button>

									</div>


									<div class="col-xs-1 col-xs-offset-6">
									</div>

									<div class="form-group login-register" style="margin-left:110px;">
										<button type="button" class="btn btn-primary btn-lg login-button btn-success">Save Changes</button>
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
