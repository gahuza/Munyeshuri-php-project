


<?php

session_start();


?>
	

<?php

include './/php/connection.php';

if(isset($_POST['login'])){
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    $qry = "SELECT * FROM `admin` WHERE `Email` = '$email' AND `passwd` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);

    


    if($row ==1 )
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        $username = $data['username'];
        
        
        $_SESSION['uid']=$id;
        $_SESSION['username']=$username;
        ?>
           <script>
            alert(' admin successfull entered');
            window.open('./dashboard.php','_self')
           // window.open('../dashboard.php','_self')
</script>
      
        <?php
        
    }

    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('..//index.php','_self')
</script>
        <?php
    }
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
            <!-- <a class="navbar-brand with-text" title="PSD to HTML" href="index.html">Eric.</a> -->
            
           <a class="navbar-brand with-text" >
            Most Welcome
           </a>
           <a class="navbar-brand with-text" >
          
           <img src="upload/logo1.jfif" style="border-radius:70%;margin-top: 44%;">
           </a>
           
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>Admin Login account <small>Please sign in to use our sites.</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                           
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            

            <div class="section">
                <div class="container-fluid">
                    <form class="defaultform row" method="POST" action="">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="register-widget clearfix">
                                <div class="widget-title">
                                    <h3>Sign in Account</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Username or Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>   
                                    <div class="col-sm-12">
                                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                                      
                                     </div> 
                                 
                                   
                                </div>          
                            </div>
                        </div>
                    </form><!-- end row -->
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
                                <li><a href="#">Get a Support</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                            <!-- end check -->
                        </div>
                        <!-- end col -->
                        <div class="col-md-3 col-sm-12">
                            <ul class="check">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Terms of Usage</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="page-pricing.html">Pricing & Plan</a></li>
                                <li><a href="page-become-a-trainer.html">Become a Trainer</a></li>
                            </ul>
                            <!-- end check -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-3 col-sm-12">
                            <ul class="check">
                                <li><a href="http://twitter.com/psdconverthtml" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i> Dribbble</a></li>
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