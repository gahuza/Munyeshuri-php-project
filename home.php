<?php

session_start();
if(!isset($_SESSION['username'])){
    echo" <script> alert('you have arleady logged out')<script>";
    header('location:../index.html');
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Jean de DIEU</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- COLORS STYLES -->
    <link rel="stylesheet" type="text/css" href="css/colors.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="leftmenu memberprofile">

    <!-- PRELOADER -->
    <div class="cssload-container">
        <div class="cssload-loader"></div>
    </div>
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <!-- <a class="navbar-brand with-text" title="PSD to HTML" href="index.html">Okero</a> -->
            <a class="navbar-brand with-text" title="PSD to HTML" href="#"><?php echo $_SESSION['username']; ?></a>
            <ul class="sidebar-nav">
                <li class="active"><a href="home.php">Home <span><i class="fa fa-user"></i></span></a></li>
                <!-- <li class="active"><a href="account.html">Create Account <span><i class="fa fa-lock"></i></span></a></li> -->
                <li><a href="courses.html">Courses <span><i class="fa fa-briefcase"></i></span></a></li>
                <li><a href="achievements.html">Achievements <span><i class="fa fa-trophy"></i></span></a></li>
                <!--  <li><a href="messages.html">Messages <span><i class="fa fa-comment-o"></i></span></a></li>
                <li><a href="friends.html">Friends <span><i class="fa fa-share-alt"></i></span></a></li>
                 <li><a href="profile-edit.html">Profile <span><i class="fa fa-edit"></i></span></a></li> -->
                <!-- <li><a href="register.html">Registiration <span><i class="fa fa-lock"></i></span></a></li> -->
                <li><a href="./teacherlogin.html">Teacher Login  <span><i class="fa fa-key"></i></span></a></li>
                <li><a href="./adminlogin.php">Admin Login  <span><i class="fa fa-key"></i></span></a></li>
                <li><a href="./php/logout.php">Logout <span><i class="fa fa-comments-o"></i></span></a></li>
                <!-- <li><a href="index.html">Back to EduPress</a></li> -->
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('upload/demo_01.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>MUNYESHURI INFORMMATION MANAGEMENT SOFTWARE SYSTEM <small>Hello there, M.I.M.S.S</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb"  >
                                        <li><a href="#">Logged In  AS:<?php echo $_SESSION['username']; ?></a></li>
                                        
                                    </ol>
                                </div>
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            </div>

            <div class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <h3> SYSTEM DESIGNED BY</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="team-member-img text-center">
                                            <img src="upload/jado.jpg" alt="team member img" class="img-responsive">
                                            <br>
                                            <a href="#" class="btn btn-default btn-sm">Follow me</a>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-9 col-sm-12">
                                        <div class="team-member-name">
                                            <p>GAHUZAMIRYANGO Jean de DIEU</p>
                                            <span>Student</span>
                                        </div>
                                        <p>Howdy, welcome to the my profile, we build professional responsive and retina ready SITES for online learning websites! With our professional course pages, you can earn money from your online courses. Join us today! Create and share outstanding quiz's, ask questions and get answer from your awesome clients!</p>

                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took. With our professional course pages..</p>

                                        <hr class="invis">

                                        <div class="widget-title">
                                            <h3>My Achievements</h3>
                                            <hr>
                                        </div><!-- end title -->

                                        <ul class="customlist">
                                            <li><img src="images/icons/award_01.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_02.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_03.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_04.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_05.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_06.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_07.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_08.png" alt="" class="img-responsive"></li>
                                            <li><img src="images/icons/award_09.png" alt="" class="img-responsive"></li>
                                        </ul>

                                    </div><!-- end col -->
                                </div><!-- end row -->      
                            </div><!-- end widget -->
                        </div><!-- end col -->

                        <div class="col-md-5 col-sm-12 m30">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <h3>Contact With Me</h3>
                                    <hr>
                                </div><!-- end title -->

                                <div class="defaultform">
                                    <form class="row" method="POST" action="./php/contact.php">
                                        <div class="col-md-9">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                        </div>
                                        
                                       
                                        <div class="col-md-9 clearfix">
                                            <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message Below"></textarea>
                                            <button type="submit" value="SEND" id="submit" class="btn btn-primary" name="submit"> Send Form</button>
                                        </div>
                                    </form> 
                                </div>

                            </div><!-- end about-widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <div class="section lb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="clearfix">
                                <div class="widget-title">
                                    <h3>VIEW All Courses</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_01.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html"> English Course</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->

                                <hr>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_02.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html"> Web Design</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->

                                <hr>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_03.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html"> App Design</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->

                                <hr>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_04.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html">HTML5 Video Design</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="register-widget clearfix">
                                <div class="widget-title">
                                    <h3>Expired Courses</h3>
                                    <hr>
                                </div><!-- end title -->
                 
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_05.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html">Working with a Group</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  <a href="#">Expired : Re-join the course</a></small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->

                                <hr>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_06.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div><!-- end team-desc -->
                                                    </div><!-- end magnifier -->
                                                </div>
                                            </div><!-- end media -->
                                        </div><!--widget -->
                                    </div><!-- end col -->
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a href="course-single.html"> Build a Website</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  <a href="#">Expired : Re-join the course</a></small>
                                            </div><!-- end title -->
                                        </div><!-- end video-wrapper -->
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <footer class="copyrights">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <ul class="check">
                                <li><a href="#">PSD to HTML</a></li>
                                <li><a href="#">Templates</a></li>
                                <li><a href="#">Documentation</a></li>
                        
                            </ul>
                            <!-- end check -->
                        </div>
                        <!-- end col -->
                        <div class="col-md-3 col-sm-12">
                            <ul class="check">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Terms of Usage</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                         
                            </ul>
                            <!-- end check -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-3 col-sm-12">
                            <ul class="check">
                                <li><a href="http://twitter.com/psdconverthtml" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                               </ul>
                            <!-- end check -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-3 col-sm-12">
                            <div class="newsletter">
                                <p>Your email is safe with us and we hate spam as much as you do.</p>
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your email here..">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="copylinks">
                                <p><b>Copyrights &copy; 2023 <a href="http://psdconverthtml.com"> Jean de Dieu  GAHUZAMIRYANGO</a> All Rights Reserved.</b></p>
                            </div>
                            <!-- end links -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-6 col-sm-12">
                            <div class="footer-social text-right">
                                <a class="dmtop" href="#"><i class="fa fa-angle-up"></i></a>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </footer>
            <!-- end copyrights -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- end wrapper -->

    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://kit.fontawesome.com/5356469735.js" crossorigin="anonymous"></script>
</body>
</html>