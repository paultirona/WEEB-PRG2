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

    <title>Hearthstone (PC)</title>

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
                <h1 class="page-header">Hearthstone
                    <small>(PC)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href='<?php echo base_url()."index.php/account/home"?>'>Home</a>
                    </li>
                    <li><a href='<?php echo base_url()."index.php/account/Shop"?>'>Games</a>
                    </li>
                    <li class="active">Hearthstone (PC)</li>
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
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/hearthstone750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/hearthstone2_750x500.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/hearthstone3_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/hearthstone4_750x500.jpg" alt="">
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
                <p>Hearthstone, originally known as Hearthstone: Heroes of Warcraft, is a free-to-play online collectible card video game developed and published by Blizzard Entertainment.</p>
                <p>Hearthstone is a digital-only collectible card game that revolves around turn-based matches between two opponents (player vs. player or player vs. computer opponent) using pre-made decks of cards from their collection.[1] In matches, players use their card deck, representing summonable minions, spells, and other actions, along with their selected Hero's unique power, to try to defeat their opponent by reducing their health to zero before the opponent can do the same to them.</p>
                <h3>Game Details</h3>
                <ul>
                    <li>Title: Hearthstone</li>
                    <li>Genre: Card Game</li>
                    <li>Developer: Blizzard Entertainment</li>
                    <li>Release Date: March 11, 2014</li>
                    <li>Also available on: iOS, Android</li>
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
						Players can choose from a number of game modes, with each offering a slightly different experience. Players start the free-to-play game with a limited collection of basic cards but can gain rarer and more powerful cards through purchasing packs of cards through micropayments or as rewards from specific game modes. Blizzard has added new cards sets through Expansions and Adventures, roughly three times a year, to increase the pool of available cards. To help newer players remain competitive with experienced ones while also keeping the metagame dynamic, Blizzard has implemented two different styles of gameplay; Standard which uses only the basic set of cards plus those of the most recent expansions, and Wild, which allows any cards to be used.					
						</p>         
					</div>
                    <div class="tab-pane fade" id="service-two">
                       <h4>Minimum Requirements</h4>
                        <p>Operating System:	Windows® 7 / Windows® 8 / Windows® 10</p>
						<p>Processor:	Intel® Pentium® D or AMD® Athlon™ 64 X2</p>
						<p>Video:	NVIDIA® GeForce® 6800 (256 MB) or ATI™ Radeon™ X1600 Pro (256 MB) or better</p>
						<p>Memory:	2 GB RAM</p>
						<p>Storage:	3 GB available HD space</p>
						<p>Internet:	Broadband Internet connection</p>
						<p>Input:	Keyboard and mouse, or touchscreen</p>
						<p>Resolution:	1024 x 768 minimum display resolution</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Ratings</h4>
                        <p><b>88%</b> Metacritic</p>
						<p><b>8/10</b> Gamespot</p>
						<p><b>9/10</b> IGN</p>
						</div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Reviews</h4>
                        <p>Between its friendly design and its flexible approach to a free-to-play economy, Hearthstone has successfully pulled me into a genre that I didn't care about in the least. But even more incredibly, it's kept me rapt longer than any games I've played in years, and shows no signs of letting up.
						 - Polygon</p>
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
                <a href='<?php echo base_url()."index.php/account/game_overwatch"?>'>
                    <img class="img-responsive img-hover img-related" src="<?php echo base_url();?>assets/img/OW500x300.jpg" alt="">
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
