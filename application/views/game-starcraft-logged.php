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

    <title>Starcraft II (PC)</title>

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
					
					<li class = "active">
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
                <h1 class="page-header">Starcraft II
                    <small>(PC)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>
                    <li><a href='<?php echo base_url()."index.php/account/Shoplogged"?>'>Games</a>
                    </li>
                    <li class="active">Starcraft II (PC)</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/LOTV750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/starcraft2_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/starcraft3_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/starcraft4_750x500.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Game Description</h3>
                <p>StarCraft II: Legacy of the Void is a standalone expansion pack to the military science fiction real-time strategy game StarCraft II: Wings of Liberty, and the third and final part of the StarCraft II trilogy developed by Blizzard Entertainment.</p>
                <p>The single-player campaign features an even number of missions similar to Wings of Liberty and Heart of the Swarm and centers around the Protoss character Artanis, hierarch of the Khalai Protoss and the Nerazim (Dark Templar).</p>
                <h3>Game Details</h3>
                <ul>
                    <li>Title: Starcraft II</li>
                    <li>Genre: Real Time Strategy</li>
                    <li>Developer: Blizzard Entertainment</li>
                    <li>Release Date: November 10, 2015</li>
                    <li>Also available on: OSX</li>
					
                </ul>
				
				
				<a href='<?php echo base_url()."index.php/account/payment_starcraft";?>' class="btn btn-success btn-lg">Purchase</a>

			
				
            </div>

        </div>
        <!-- /.row -->

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> About this Game</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> System Requirements</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Ratings</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Reviews</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Description</h4>
                         <p>
						The expansion includes additional units and multiplayer changes from Heart of The Swarm, as well as a continuing campaign focusing on the Protoss race. The campaign concludes the StarCraft II trilogy and focuses on Artanis as its protagonist.				
						</p> 					
					</div>
                     <div class="tab-pane fade" id="service-two">
                        <h4>System Requirements</h4>
                        <p>Operating: System	Windows XP/Windows Vista/Windows 7/Windows 8 (Updated with the latest Service Packs) with DirectX 9.0c</p>
						<p>Processor:	Intel Pentium D or AMD Athlon 64 X2</p>
						<p>Video:	NVIDIA GeForce 7600 GT or ATI Radeon X800 XT or better</p>
						<p>Memory:	1.5 GB RAM</p>
						<p>Storage:	20 GB available HD space</p>
						<p>Internet:	Broadband Internet connection</p>
						<p>Media:	DVD-ROM drive</p>
						<p>Resolution:	1024X768 minimum display resolution</p>
					</div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Ratings</h4>
                        <p><b>93%</b> PC Gamer</p> 
						<p><b>93%</b> Metacritic</p>
						<p><b>9.5/10</b> GameSpot</p>
					</div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Reviews</h4>
						<p>For anyone else interested in or already on board with RTS games, Starcraft II isn't just an amazing, it's required reading. - Telegraph</p>
					</div>
                </div>

            </div>
        </div>

        <!-- Related Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">You Might Also Like</h3>
            </div>

           <div class="col-sm-3 col-xs-6">
                <a href='<?php echo base_url()."index.php/account/game_hearthstone"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/hearthstone500x300.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href='<?php echo base_url()."index.php/account/game_forhonor"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/HONOR500x300.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href='<?php echo base_url()."index.php/account/game_overwatch"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/OW500x300.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href='<?php echo base_url()."index.php/account/game_mordor"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/SHADOW500x300.jpg" alt="">
                </a>
            </div>

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
