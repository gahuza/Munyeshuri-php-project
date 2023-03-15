

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>mployee</title>
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
            <!-- <a class="navbar-brand with-text" title="PSD to HTML" href="index.html">Okero</a> -->
            <a class="navbar-brand with-text" title="PSD to HTML" href="#">Employee</a>
            <ul class="sidebar-nav">
                <li><a href="viewall.php">Teacher <span><i class="fa fa-user"></i></span></a></li>
                <li><a href="viewall.php">back<span><i class="fa fa-briefcase"></i></span></a></li>
                  <!-- <li><a href="index.html">Back to EduPress</a></li> -->
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
               <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2> Register Students mmarks<small>Please complete all fields for perfect Registration..</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                             
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
                <?php
                include './php/connection.php';
             if(isset($_GET['STUD_ID'])){
              $stid=$_GET['STUD_ID'];
              $sql = "SELECT * FROM student where STUD_ID=$stid LIMIT 1";
              $result = $con->query($sql);
             
              if ($result->num_rows > 0) {
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                 $i++;
            
?>

                    <form class="defaultform row"  action="./php/regimarks.php" method="POST" >
                        <div class="col-md-9">
                            <div class="register-widget clearfix">
                                <div class="widget-title">
                                    <h3>Registration Form</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    
                                <div class="space">
                                <label>Trimester: </label>
                                          <select name="Trimester" class="form-control" >
                                            <option >Trimester I</option>
                                            <option>Trimester II</option>
                                            <option>Trimester III</option>
                                         
                                          </select>
                                            </div>  
                                <div class="space">
                                <label>Academic Year: </label>
                                          <select name="academic" class="form-control" >
                                            <option >2018-2019</option>
                                            <option>2019-2020</option>
                                            <option>2020-2021</option>
                                            <option>2021-2022</option>
                                            <option>2022-2023</option>
                                            <option >2023-2024</option>
                                          </select>
                                            </div>
                                            <div class="space">
                                <label>Facult: </label>
                                          <select name="Facult" class="form-control" >
                                            <option >SOD</option>
                                            <option>MAS</option>
                                            <option>PLUB</option>
                                            <option>MCE</option>
                                            <option>PCB</option>
                                            <option >LKK</option>
                                          </select>
                                            </div>
                                            <div class="space">
                                <label>Course: </label>
                                          <select name="course" class="form-control" >
                                            <option >web development</option>
                                            <option>web analysis</option>
                                            <option>database</option>
                                            <option>math</option>
                                            <option>english</option>
                                            <option >LKK</option>
                                          </select>
                                            </div>
                                            <div class="space">
                                            <label>ID : </label>
                                            <input type="text" name="id" class="form-control" value="<?php echo $row["STUD_ID"];?>">    
                                        </div>
                                        <div class="space">
                                            <label>First / Last Name : </label>
                                            <input type="text" name="fname" class="form-control" value="<?php echo $row["Firstname"];?>">    
                                        </div>
        
                                        <div class="space">
                                            <label>Lastname : </label>
                                            <input type="text" name="lname" class="form-control" value="<?php echo $row["Lastname"];?>">    
                                        </div>
        
                                      
        
                                        
                                            <div class="space">
                                            <label>gender : </label>
                                            <input type="text" name="gender" class="form-control" value="<?php echo $row["Gender"];?>">    
                                        
                                        </div>
                                        <div class="space">
                                            <label>Test Marks : </label>
                                            <input type="text" name="test" class="form-control" placeholder="Enter total tests ">    
                                        </div>
                                        <div class="space">
                                            <label>Exam Marks : </label>
                                            <input type="text" name="exam" class="form-control" placeholder="Enter total exam ">    
                                        </div>
                                       
        
                                        
        
                            
        
                                        <hr class="invis"> 
                                        <div class="space clearfix">
                                          
                                            <input class="btn btn-primary" type="submit" value="Register" name="submit">
                                            <input class="btn btn-primary" type="submit" value="Update" name="update">
                                            <input class="btn btn-primary" type="submit" value="Delete" name="delete">
                                       
                                       
                                        </div>
                                        <?php }}} ?>
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
                                <p> <b>Copyrights &copy; 2023 <a href="http://psdconverthtml.com"> Jean de Dieu  GAHUZAMIRYANGO</a> All Rights Reserved.</b></p>
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