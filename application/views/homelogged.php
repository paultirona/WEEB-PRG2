<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home-Logged</title>

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
				
				
					<li class="active">
                        <a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>
					
                    <li>
                        <a href='<?php echo base_url()."index.php/account/aboutlogged"?>'>About</a>
                    </li>
             
                    <li>
                        <a href='<?php echo base_url()."index.php/account/contactlogged"?>'>Contact</a>
                    </li>			
				
					<li>							
						<a href="#"> (USERNAME)</a>
					</li>
					
					<li>
					
						<!--
						<a href="home.html">Logout</a>
						-->
						<?php
						
						//This is a tracer for session
						/*
						echo "<pre>";
						print_r($this->session->all_userdata());
						echo "</pre>";
						*/
						
						?>
						

						<a href='<?php echo base_url()."index.php/account/login"?>'>Logout</a>
				
						
					</li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
			
				<img src="<?php echo base_url();?>assets/img/shadow_1200x675.jpg" class="img-responsive img-full" alt=""> 
				
               
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/img/overwatch_1200x675.png" class="img-responsive img-full" alt="">
            </div>
			
            <div class="item">
	
                <img src="<?php echo base_url();?>assets/img/starcraft_1200x675.jpg" class="img-responsive img-full" alt="">	
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to our online game store!
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p> In order to purchase items from this website, one must have a registered account.</p>
                        <a href='<?php echo base_url()."index.php/account/signup"?>' class="btn btn-success">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Browse Games</h4>
                    </div>
                    <div class="panel-body">
                        <p>Search for games that are new or old as long as you make the most out of it.</p>
                        <a href='<?php echo base_url()."index.php/account/Shoplogged"?>' class="btn btn-info">Search</a>
                    </div>
                </div>
            </div>
			
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Support</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have any concerns or questions? Contact us! OGSphilippines@gmail.com</p>
                        <a href='<?php echo base_url()."index.php/account/contactlogged"?>' class="btn btn-info">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; OGS Philippines 2017</p>
					<!-- Online Game Store Philippines --> 
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
