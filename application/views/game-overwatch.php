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

    <title>Overwatch (PC)</title>

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
                <a class="navbar-brand" href='<?php echo base_url()."index.php/account/home"?>'>OGS Philippines</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					<li>
                        <a href='<?php echo base_url()."index.php/account/home"?>'>Home</a>
                    </li>
					
					<li class = "active">
                        <a href='<?php echo base_url()."index.php/account/Shop"?>'>Shop</a>
                    </li>
					
					<li>
                        <a href='<?php echo base_url()."index.php/account/about"?>'>About</a>
                    </li>

                    <li>
                        <a href='<?php echo base_url()."index.php/account/contact"?>'>Contact</a>
                    </li>
                    <li>
                        <a href='<?php echo base_url()."index.php/account/signup"?>'>Register</a>
                    </li>
                    <li>
                        <a href='<?php echo base_url()."index.php/account/login"?>'>Login</a>
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
                <h1 class="page-header">Overwatch
                    <small>(PC)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/home"?>'>Home</a>
                    </li>
                    <li><a href='<?php echo base_url()."index.php/account/Shop"?>'>Games</a>
                    </li>
                    <li class="active">Overwatch (PC)</li>
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
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/OW750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/hanzo750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/genji750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/mcree750x500.jpg" alt="">
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
                <p>Overwatch is a highly stylized team-based shooter set on a near-future earth. Every match is an intense multiplayer showdown pitting a diverse cast of heroes, mercenaries, scientists, adventurers, and oddities against each other in an epic, globe-spanning conflict. </p>
                <p>In Overwatch, bold characters with extraordinary abilities fight across fantastic yet familiar battlegrounds. Teleport past rockets while an ally dives behind a double-decker hoverbus on the cobblestone streets of London. Shield your team from a shadowy archer’s ambush, then hunt him through a bazaar beneath a high-tech Egyptian pyramid.</p>
                <h3>Game Details</h3>
                <ul>
                    <li>Title: Overwatch</li>
                    <li>Genre: Action</li>
                    <li>Developer: Blizzard Entertainment</li>
                    <li>Release Date: May 23, 2016</li>
                    <li>Also available on: PS4, XONE</li>
                </ul>

				<a href='<?php echo base_url()."index.php/account/signup"?>' class="btn btn-success btn-lg">Purchase</a>

				
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
						Essentially a hero-based shooter, Overwatch assigns players into two teams of six, with each player selecting one of 24 pre-defined hero characters with unique movement, attributes, and abilities whose roles are divided into four categories: Offense, Defense, Tank, and Support.
						Players on a team work together to secure and defend control points on a map and/or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they continue to play in matches.					
						</p>         
					</div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>System Requirements</h4>
                        <p>Operating system: Windows Vista/7/ 8/10 64-bit (latest Service Pack)</p>
						<p>Processor: Intel Core i3 or AMD Phenom X3 865.</p>
						<p>Video: Nvidia GeForce GTX 460, ATI Radeon HD 4850, or Intel HD Graphics 4400.</p>
						<p>Memory: 768 MB VRAM, 4 GB System RAM.</p>
						<p>Storage: 7200 RPM with 5 GB available HD space.</p>
					</div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Ratings</h4>
                        <p><b>9.4/10</b> IGN</p>
						<p><b>91%</b> Metacritic</p>
						<p><b>9/10</b> Trusted Reviews</p>
					</div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Reviews</h4>
                        <p>Just as Team Fortress 2 burst onto the scene and captivated so many with its charm, and 
						accessible gameplay, Overwatch is poised to do the same with its sharp gameplay and likable characters.
						There’s little doubt that the next great class-based shooter has arrived - Twinfinite</p>
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
