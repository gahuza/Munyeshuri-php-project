<?php
include('./php/config.php');
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
    <link rel="stylesheet" href="./styles.css">

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
            <a class="navbar-brand with-text" title="PSD to HTML" href="#"></a>
            <ul class="sidebar-nav">
                <li><a href="./dashboard.php">Dashboard <span><i class="fa fa-user"></i></span></a></li>
                <li><a href="./admin.php">students <span><i class="fa fa-briefcase"></i></span></a></li>
                <li class="active"><a href=".//allusers.php">users <span><i class="fa fa-lock"></i></span></a></li>
                <li class="active"><a href="./allstudmarks.php">Marks <span><i class="fa fa-lock"></i></span></a></li>
                <li class="active"><a href=".//allstudmarks.php">Add Course <span><i class="fa fa-lock"></i></span></a></li>
                <li class="active"><a href="./php/logout.php">Logout <span><i class="fa fa-lock"></i></span></a></li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
             <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>WELCOME ADMINISTRATOR</h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                    
                </div>
                <!-- end page-title -->
            </div>
            

            <div class="section">
               
            <div class="container-fluid">

<div class="row">
    <div class="col-md-12">

        <h2 class="page-title">Dashboard Entered as: <?php echo $_SESSION['username']; ?></h2>
        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-primary text-light">
                                <div class="stat-panel text-center">
<?php 
$sql ="SELECT id from acc_tbl ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
                                    <div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
                                    <div class="stat-panel-title text-uppercase">Accounts Available </div>
                                </div>
                            </div>
                            <a href="reg-users.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-success text-light">
                                <div class="stat-panel text-center">
                                <?php 
$sql1 ="SELECT STUD_ID from student ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>
                                    <div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
                                    <div class="stat-panel-title text-uppercase">Registered Students</div>
                                </div>
                            </div>
                            <a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-info text-light">
                                <div class="stat-panel text-center">
<?php 
$sql2 ="SELECT Empo_id from employee ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>

                                    <div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
                                    <div class="stat-panel-title text-uppercase">Number of Teachers</div>
                                </div>
                            </div>
                            <a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-warning text-light">
                                <div class="stat-panel text-center">
<?php 
$sql3 ="SELECT id from course ";
$query3= $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$brands=$query3->rowCount();
?>												
                                    <div class="stat-panel-number h1 "><?php echo htmlentities($brands);?></div>
                                    <div class="stat-panel-title text-uppercase">Listed Coures</div>
                                </div>
                            </div>
                            <a href="manage-brands.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">

        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-3">
                        <div class="panel panel-default"> -->
                            <!-- <div class="panel-body bk-primary text-light">
                                <div class="stat-panel text-center"> -->
<?php 
// $sql4 ="SELECT id from tblsubscribers ";
// $query4 = $dbh -> prepare($sql4);
// $query4->execute();
// $results4=$query4->fetchAll(PDO::FETCH_OBJ);
// $subscribers=$query4->rowCount();
?>
                                    <!-- <div class="stat-panel-number h1 "><?php 
                                    //echo htmlentities($subscribers);
                                    ?></div>
                                    <div class="stat-panel-title text-uppercase">Subscibers</div> -->
                                <!-- </div>
                            </div> -->
                            <!-- <a href="manage-subscribers.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a> -->
                        <!-- </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-success text-light">
                                <div class="stat-panel text-center">
                                <?php 
$sql6 ="SELECT STUD_ID from student ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
                                    <div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
                                    <div class="stat-panel-title text-uppercase">Queries</div>
                                </div>
                            </div>
                            <a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body bk-info text-light">
                                <div class="stat-panel text-center">
<?php 

$sql5 ="SELECT id from tbltestimonial ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>

                                    <div class="stat-panel-number h1 "><?php
                                     //echo htmlentities($testimonials);
                                     ?></div>
                                    <div class="stat-panel-title text-uppercase">Testimonials</div>
                                </div>
                            </div>
                            <a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                
                </div>
            </div> -->
        </div>
    </div>
</div>









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