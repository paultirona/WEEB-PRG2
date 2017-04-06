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

    <title>For Honor (PC)</title>

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
                <h1 class="page-header">For Honor
                    <small>(PC)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/homelogged"?>'>Home</a>
                    </li>
                    <li><a href='<?php echo base_url()."index.php/account/Shoplogged"?>'>Games</a>
                    </li>
                    <li class="active">For Honor (PC)</li>
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
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/HONOR750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/honor2_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/honor3_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/honor4_750x500.jpg" alt="">
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
                <p>For Honor is a hack and slash fighting game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One. The game allows players to play the roles of historical forms of soldiers and warriors, including knights, samurai, and vikings within a medieval setting, controlled using a third-person perspective.</p>
                <p>Carve a path of destruction through an intense, believable battlefield in For Honor.</p>
                <h3>Game Details</h3>
                <ul>
                    <li>Title: For Honor</li>
                    <li>Genre: Action</li>
                    <li>Developer: Ubisoft</li>
                    <li>Release Date: Feb 14, 2017</li>
                    <li>Also available on: PS4, XONE</li>
					
                </ul>
				
				
				<a href='<?php echo base_url()."index.php/account/payment_forhonor";?>' class="btn btn-success btn-lg">Purchase</a>

			
				
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
						For Honor is an action fighting game set during a medieval period inspired fantasy setting. Players can play as a character from three different factions, namely The Legion, The Chosen, and The Warborn. The three factions represent Knights, Samurai, and Vikings, respectively. Each faction has four classes. The Vanguard class is described as "well-balanced" and has excellent offense and defense. The Assassin class is fast and efficient in dueling enemies, but the class deals much less damage to enemies. The Heavies are more resistant to damages and are suitable for holding capture points, though their attacks are slow. The last class, known as "Hybrids", are a combination of the three types, and is capable of using uncommon skills.					
						</p>   				
					</div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>System Requirements</h4>
                        <p>OS: Windows 7, Windows 8.1, Windows 10 (64-bit versions only)</p>
						<p>CPU: Intel Core i3-550. | AMD Phenom II X4 955 or equivalent.</p>
						<p>GPU: Nvidia GeForce GTX660/GTX750ti/GTX950/GTX1050 with 2 GB VRAM or more. | AMD Radeon HD6970/HD7870/R9 270/R9 370/RX460 with 2 GB VRAM or more.</p>
						<p>RAM: 4GB.</p>
					</div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Ratings</h4>
                        <p><b>8/10</b> IGN</p>
						<p><b>76%</b> Metacritic</p>
						<p><b>8/10</b> GameSpot</p>
					</div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Reviews</h4>
                        <p>Whether you prefer, multiplayer or story, Dominion or Duel, viking or knight or samurai, there’s something for every gamer in For Honor. With a compelling story, beautiful customization options, competition, community, this 
						game is both a triumph and a damn good fight.unity, and a damn good fight. - GamingTrend</p>
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
                <a href='<?php echo base_url()."index.php/account/game_overwatch"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/OW500x300.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href='<?php echo base_url()."index.php/account/game_starcraft"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/LOTV500x300.jpg" alt="">
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
