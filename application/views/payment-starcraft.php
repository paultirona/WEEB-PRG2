<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='<?php echo base_url()."index.php/account/homelogged"?>'>OGS Philippines</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				
					<li>
                        <a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>
					
					<li>
                        <a href='<?php echo base_url()."index.php/account/Shoplogged"?>'>Shop</a>
					
                    </li>
	
                    <li>
                        <a href='<?php echo base_url()."index.php/account/aboutlogged"?>'>About</a>
                    </li>
             
                    <li>
                        <a href='<?php echo base_url()."index.php/account/contactlogged"?>'>Contact</a>
                    </li>			
					
					
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Username: <?php echo $this->session->userdata('username')?></a>
                            </li>
                            <li>
                                <a href='<?php echo base_url()."index.php/account/accountdetails"?>'>Account Details</a>
                            </li>
							
							<li>
                                <a href='<?php echo base_url()."index.php/account/historytransaction"?>'>Transactions</a>
                            </li>
							
                            <li>
								<a href='<?php echo base_url()."index.php/account/login"?>'>Logout</a>
                               
                            </li>
                        </ul>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> <?php echo $this->session->userdata('username')?>'s Payment</h1>
               
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>

                    <li class="active">Payment</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<!-- Intro Content -->
        <div class="row">
		
		
			
			<span class="text-danger"><?php echo form_error('card-holder-name'); ?></span>						
			<span class="text-danger"><?php echo form_error('card-number'); ?></span>
			<span class="text-danger"><?php echo form_error('cvv'); ?></span>
								
			<form class="form-horizontal" role="form" method="post" action='<?php echo base_url();?>index.php/Account/pay_validation_starcraft'>
			
				<fieldset>
				<!--
				  <legend>Payment</legend>
				  -->
				  <div class="form-group">
					<label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name" value="<?php echo set_value('card-holder-name'); ?>">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label" for="card-number">Card Number</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number" value="<?php echo set_value('card-number'); ?>">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
					<div class="col-sm-9">
					  <div class="row">
						<div class="col-xs-3">
						  <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
							<option>Month</option>
							<option value="01">Jan (01)</option>
							<option value="02">Feb (02)</option>
							<option value="03">Mar (03)</option>
							<option value="04">Apr (04)</option>
							<option value="05">May (05)</option>
							<option value="06">June (06)</option>
							<option value="07">July (07)</option>
							<option value="08">Aug (08)</option>
							<option value="09">Sep (09)</option>
							<option value="10">Oct (10)</option>
							<option value="11">Nov (11)</option>
							<option value="12">Dec (12)</option>
						  </select>
						</div>
						<div class="col-xs-3">
						  <select class="form-control" name="expiry-year">
							
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							
							<option value="2022">2012</option>
							<option value="2023">2013</option>
							<option value="2024">2014</option>
							<option value="2025">2015</option>
							<option value="2026">2016</option>
							<option value="2027">2017</option>
							<option value="2028">2018</option>
							<option value="2029">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
						  </select>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label" for="cvv">Card CVV</label>
					<div class="col-sm-3">
					  <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code" value="<?php echo set_value('cvv'); ?>">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
					  <button type="submit" class="btn btn-success">Pay Now</button>
					  <input type="hidden" name="GameID" value=3>
					</div>
				  </div>
				</fieldset>
		  </form>
		
		
		
		
        </div>
        <!-- /.row -->

        


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; OGS Philippines 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>
