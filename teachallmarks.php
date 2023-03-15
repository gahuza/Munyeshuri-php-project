
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
    <link rel="stylesheet"type="text/css"  href="styled.css">
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
                <li><a href=".//viewall.php">Home <span><i class="fa fa-user"></i></span></a></li>
                <!-- <li><a href=".//courses.html">Courses <span><i class="fa fa-briefcase"></i></span></a></li> -->
                <!-- <li class="active"><a href="account.html">Add Marks <span><i class="fa fa-lock"></i></span></a></li> -->
                <li class="active"><a href="./allstudmarks.php">All Marks <span><i class="fa fa-lock"></i></span></a></li>
                <li class="active"><a href=".//index.html">Logout <span><i class="fa fa-lock"></i></span></a></li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('upload/ur_4401.JPG');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>VIEW ALL MARKS<small></small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href=".//home.php">Home</a></li>
                                        <li><a href="#">Members</a></li>
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
                <form class="defaultform row"  action="./php/regstudent.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="register-widget clearfix">
                                <div class="widget-title">
                                    <h3>All students Marks</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                   
                           



          <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Trimester</th>
											<th>Academic</th>
											<th>Facult</th>
											<th>course</th>
											<th>STUD_ID</th>
                               <th>fname</th>
                       <th>lname</th>
                       <th>gender</th>
                       <th>Exam</th>
                       <th>Total</th>
                       <th>Update</th>	
										</tr>
									</thead>
									<tfoot>
										
									</tfoot>
									<tbody>

<?php 
 include './php/connection.php';
	
 $sql = "SELECT * FROM marks ";
 $result = $con->query($sql);

 if ($result->num_rows > 0) {
   $i=0;
   while($row = mysqli_fetch_array($result)) {
    $i++;

?>	


<tr style="text-align:center;">
                      <th scope="row"><?php echo $i; ?></th>
                      
             
                        <td><?php echo $row["trimester"];?></td>
                      <td><?php echo $row["academic"];?></td>
                      <td><?php echo $row["facult"];?></td>
                      <td><?php echo $row["course"];?></td>
                      <td><?php echo $row["STUD_ID"];?></td>
                      <td><?php echo $row["fname"];?></td>
                      <td><?php echo $row["lname"];?></td>
                      <td><?php echo $row["gender"];?></td>
                      <td><?php echo $row["Exam"];?></td>
                      <td><?php echo $row["Total"];?></td>
                      <td><a href="addstudentmark.php?STUD_ID=<?php echo $row["STUD_ID"];?>" class="btn btn-info mr-3y">Edit</td>
            			</tr>
										<?php }} ?>
										
									</tbody>
								</table>
         
                                   
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