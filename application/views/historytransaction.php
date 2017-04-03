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

    <title>historytransaction</title>

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
                <h1 class="page-header"> <?php echo $this->session->userdata('username')?>'s Transactions</h1>
               
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>
                    <li class="active">Transactions</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<!-- Intro Content -->
        <div class="row">
		
			<!-- start editing here -->
			
			
			
			<table class="table">
				<thead>
					<tr>
					  <th>#</th>
					  <th>Game Name</th>
					  <th>Date of Purchase</th>
					  <th>Price</th>
					</tr>
				</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Overwatch</td>
					<td>September 11,2001</td>
					<td>60$</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Warcraft</td>
					<td>Feb 10, 2017</td>
					<td>50$</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Starcraft 2</td>
					<td>Dec 25, 1995</td>
					<td>40$</td>
				</tr>
			</tbody>

			</table>
		
		
		
		
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
