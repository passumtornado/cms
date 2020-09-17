<?php
session_start();
if(!isset($_SESSION['waiter'])){
    
   header("location: waiter_login.php");
}


include "includes/db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jQuery.print.js"></script>
     <script type="text/javascript" src="js/main.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
    <style>
        body{
            background-image: url('images/canteen1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>

</head>
<body>
<div class="page-wrapper" id="content-wrapper">
    <div id="banner" class="banner">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="images/banner.jpg" width="100%" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
    <!..END of BANNER...>
  <div id="navigation" class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="nav_wrapper">
                    <ul>
                        <li ><a href="waiter_interface.php?source=default" class="selected" ><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="waiter_interface.php?source=deliver"><i class="fa fa-car"></i>Delivery</a></li>
                        <li><a href="#"><i class="fa fa-table"></i>Tables</a>
                            <ul>
                                <li><a href="waiter_interface.php?source=table">Add Table</a></li>
                                <li><a href="waiter_interface.php?source=viewtable">View Tables</a></li> 
                            </ul>
                        </li>
                        <li><a href="logout.php"><i class="fa fa-sign-in"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }
    else{
        $source = '';
    }
    switch($source){
        case 'about';
            include "aboutus.php";
            break;
        case 'canteen';
            include "canteen.php";
            break;
         case 'table';
            include "tables.php";
            break;
         case 'deliver';
            include "deliver.php";
            break;
        case 'print';
            include "print.php";
            break;
        case 'viewtable';
             include "view_tables.php";
            break;
        default:
         include "deliver.php";
            break;

    }

    ?>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h4>contact us</h4>
                    <p><i class="fa fa-home" aria-hidden="true"></i> fiapre uenr main street </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> mpbcanteen@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> 0241333114</p>
                    <p><i class="fa fa-globe" aria-hidden="true"></i> www.mpbcanteen.com</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>About</h4>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> Home</p>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> About Us</p>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> Contact</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>stay in touch</h4>
                    <i class="social fa fa-facebook" aria-hidden="true"></i>
                    <i class=" social fa fa-twitter" aria-hidden="true"></i>
                    <i class="social fa fa-youtube" aria-hidden="true"></i>
                    <i class=" social fa fa-instagram" aria-hidden="true"></i><br>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
   <script type="text/javascript" src="ajax.js"></script>
   
</html>