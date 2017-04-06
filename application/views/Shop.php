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

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/shop.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/shop-homepage.css" rel="stylesheet">

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
						<a href='<?php echo base_url()."index.php/account/signup"?>'> Register</a>
					</li>
					
					<li>
						<a href='<?php echo base_url()."index.php/account/login"?>'> Login</a>
					</li>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
			
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
				
				
					<span class="list-group-item">Action</span>
					<span class="list-group-item">Strategy</span>
					<span class="list-group-item">RPG</span>


                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url();?>assets/img/hearthstone1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url();?>assets/img/og-sc2-legacy-of-the-void.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url();?>assets/img/OW.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/img/OW320x150.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php 2500</h4>
                                <h4>
									<a href='<?php echo base_url()."index.php/account/game_overwatch"?>'>Overwatch</a>
                                </h4>
                                <p>Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/img/HEARTHSTONE320x150.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php 1500</h4>
                                <h4><a href='<?php echo base_url()."index.php/account/game_hearthstone"?>'>Hearthstone</a>
                                </h4>
                                <p>Hearthstone, originally known as Hearthstone: Heroes of Warcraft, is a free-to-play online collectible card video game developed and published by Blizzard Entertainment.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/img/LOTV320x150.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php 2000</h4>
                                <h4>
								<a href='<?php echo base_url()."index.php/account/game_starcraft"?>'>Starcraft 2</a>
                                </h4>
                                <p>StarCraft II: Legacy of the Void is a standalone expansion pack to the military science fiction real-time strategy game StarCraft II: Wings of Liberty, and the third and final part of the StarCraft II trilogy developed by Blizzard Entertainment.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/img/SHADOW320x150.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php 2500</h4>
                                <h4><a href='<?php echo base_url()."index.php/account/game_mordor"?>'>Mordor</a>
                                </h4>
                                <p>Middle-earth: Shadow of Mordor is an open world action-role playing video game developed by Monolith Productions and published by Warner Bros. Interactive Entertainment. An original adaptation of the legendarium created by J. R. R. Tolkien, the game is based on Tolkien's fantasy novels The Hobbit and The Lord of the Rings and is heavily inspired by director Peter Jackson's The Lord of the Rings and The Hobbit film adaptations.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/img/HONOR320x150.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php 2300</h4>
                                <h4><a href='<?php echo base_url()."index.php/account/game_forhonor"?>'>For Honor</a>
                                </h4>
                                <p>For Honor is a hack and slash fighting game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
	<!--If we have more games add pages -->
	<!-- Pagination 
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
	-->
	
    <!-- /.container -->

    <div class="container">

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
