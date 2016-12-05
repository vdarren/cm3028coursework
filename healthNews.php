<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Cluster - Creative Portfolio HTML Template</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="cluster/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="cluster/css/owl.carousel.css"/>
    <link rel="stylesheet" href="cluster/css/magnific-popup.css"/>
    <link rel="stylesheet" href="cluster/css/font-awesome.css"/>
    <link rel="stylesheet" href="cluster/css/style.css"/>
    <link rel="stylesheet" href="cluster/css/responsive.css"/>


    <!-- Favicon -->
    <link rel="shortcut icon" href="cluster/images/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="cluster/images/icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="cluster/images/icon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="cluster/images/icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="cluster/images/icon/apple-touch-icon-57-precomposed.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- PRELOADER -->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- /PRELOADER -->


<!-- HEADER -->
<header id="header">
    <nav class="navbar st-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="index.php">GOPORTLETHEN</a>
            </div>

            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#clubs">Clubs</a></li>
                    <li><a href="index.php#our-team">Team</a></li>
                    <li><a href="discover.php">Discover</a></li>
                    <li><a href="healthNews.php">healthy living blog</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!-- /HEADER -->


<!-- PAGE HEADER -->
<section id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Blog</h1>
                    <span class="st-border"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE HEADER -->


<!-- BLOG -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">


                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);


                // connect to server and select database
                $db = new mysqli(
                    "eu-cdbr-azure-west-a.cloudapp.net",
                    "bd2505ec24d031",
                    "a0a7a671",
                    "goportlethendb"
                );
                // test if connection was established, and print any errors
                if ($db->connect_errno) {
                    die('Connectfailed[' . $db->connect_error . ']');
                }
                // create a SQL query as a string
                $sql_query = "SELECT * FROM healthnews LIMIT 20";
                // execute the SQL query
                $result = $db->query($sql_query);

                //$rowsFound = $result->num_rows;

                while ($row = $result->fetch_array()) {
                    // print out fields from row of data
                    echo (
                    '<div class="single-blog">
						<article>
							<div class="post-thumb"><img class="img-responsive" src="cluster/images/blog/01.jpg" alt=""></div>
							<h4 class="post-title"><a href="">' . $row['title'] . '</a></h4>
							<div class="post-meta text-uppercase">
								<span>A DATE</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">' . $row['emailAddress'] . '</a></span>
							</div>
							<div class="post-article">
							    ' . $row['content'] . '
							</div>
						</article>
					</div>
					<hr style="border-top: 1px solid #646464;">');
                }


                $result->close();
                // close connection to database
                $db->close();
                ?>


                <div class="single-blog">
                    <article>
                        <div class="post-link"><a href="">www.yourdomain.com</a></div>
                        <h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                        <div class="post-meta text-uppercase">
                            <span>Appril 3, 2014</span>
                            <span>In <a href="">Design</a></span>
                            <span>By <a href="">Admin</a></span>
                        </div>
                        <div class="post-article">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae
                            tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque
                            debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente
                            inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis,
                            eveniet esse molestiae
                        </div>

                    </article>
                </div>
                <hr style="border-top: 1px solid #646464;">
                <div class="single-blog">
                    <article>
                        <div class="post-slider">
                            <div id="post-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="cluster/images/blog/01.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="cluster/images/blog/02.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="cluster/images/blog/03.jpg" alt="">
                                    </div>

                                    <a class="post-carousel-left" href="#post-carousel" data-slide="prev"><i
                                                class="fa fa-angle-left"></i></a>
                                    <a class="post-carousel-right" href="#post-carousel" data-slide="next"><i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                        <div class="post-meta text-uppercase">
                            <span>Appril 3, 2014</span>
                            <span>In <a href="">Design</a></span>
                            <span>By <a href="">Admin</a></span>
                        </div>
                        <div class="post-article">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae
                            tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque
                            debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente
                            inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis,
                            eveniet esse molestiae
                        </div>

                    </article>
                </div>
                <hr style="border-top: 1px solid #646464;">
                <div class="single-blog">
                    <article>
                        <div class="post-video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/v=0vrdgDdPApQ"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                        <div class="post-meta text-uppercase">
                            <span>Appril 3, 2014</span>
                            <span>In <a href="">Design</a></span>
                            <span>By <a href="">Admin</a></span>
                        </div>
                        <div class="post-article">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae
                            tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque
                            debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente
                            inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis,
                            eveniet esse molestiae
                        </div>

                    </article>
                </div>
                <hr style="border-top: 1px solid #646464;">
            </div>
            <div class="col-md-3">
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">Categories</h4>
                    <ul>
                        <li><a href="">Web Design</a></li>
                        <li><a href="">Web Development</a></li>
                        <li><a href="">Video</a></li>
                        <li><a href="">HTML</a></li>
                        <li><a href="">CSS</a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">Flickr</h4>
                    <ul class="content-flickr">
                        <li>
                            <a href="#" title="">
                                <img class="img-responsive" src="cluster/images/img1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="cluster/images/img2.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="cluster/images/img3.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="cluster/images/img4.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="cluster/images/img5.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="cluster/images/img6.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">Tags</h4>
                    <div class="tagcloud">
                        <a href="">design</a>
                        <a href="">html</a>
                        <a href="">php</a>
                        <a href="">wordpress</a>
                        <a href="">css</a>
                        <a href="">development</a>
                        <a href="">theme</a>
                        <a href="">plugin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /BLOG -->

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <!-- SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-push-6 footer-social-icons">
                <span>Follow us:</span>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-pinterest-p"></i></a>
            </div>
            <!-- /SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-pull-6 copyright">
                <p>&copy; 2015 <a href="">ShapedTheme</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

<!-- Scroll-up -->
<div class="scroll-up">
    <ul>
        <li><a href="#header"><i class="fa fa-angle-up"></i></a></li>
    </ul>
</div>

<!-- JS -->
<script type="text/javascript" src="cluster/js/jquery.min.js"></script><!-- jQuery -->
<script type="text/javascript" src="cluster/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="cluster/js/jquery.parallax.js"></script><!-- Parallax -->
<script type="text/javascript" src="cluster/js/smoothscroll.js"></script><!-- Smooth Scroll -->
<script type="text/javascript" src="cluster/js/masonry.pkgd.min.js"></script><!-- masonry -->
<script type="text/javascript" src="cluster/js/jquery.fitvids.js"></script><!-- fitvids -->
<script type="text/javascript" src="cluster/js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
<script type="text/javascript" src="cluster/js/jquery.counterup.min.js"></script><!-- CounterUp -->
<script type="text/javascript" src="cluster/js/waypoints.min.js"></script><!-- CounterUp -->
<script type="text/javascript" src="cluster/js/jquery.isotope.min.js"></script><!-- isotope -->
<script type="text/javascript" src="cluster/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
<script type="text/javascript" src="cluster/js/scripts.js"></script><!-- Scripts -->


</body>
</html>