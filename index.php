<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
    <?php include "includes/indexnav.php" ?>
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

        default:
            include "includes/content.php";
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
</html>