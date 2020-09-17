<?php
session_start();
require "includes/db.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signing.css">
    <style>
        body{
            background-image: url('images/canteen1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>


</head>
    
     <?php

$error = array();

if(isset($_POST['submit_waiter'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username= mysqli_real_escape_string($db,$username);
    $password= mysqli_real_escape_string($db,$password);
    $password = md5($password); 

    if(empty($username)){
        array_push($error,"Username is required");
    }
    if(empty($password)){
        array_push($error,"password is required");
    }
    if(count($error)==0){
        
        //$password = md5($password); 
        $waiter_query ="SELECT * FROM waiter WHERE username = '$username' AND password='$password'";
        $waiter_result = mysqli_query($db,$waiter_query);
        if(mysqli_num_rows($waiter_result)==1){
            $_SESSION['waiter']= $username;
            $_SESSION['password']= $password;
            $_SESSION['email']= $email;
            $_SESSION['image']= $image;
            

            header('location: waiter_interface.php');
        }else{
            array_push($error,"Wrong Username/password");
            echo "<script> alert('Wrong Username or password')</script>";
        }
    }


}

?>
<body>
<div id="admin-wrapper">
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
    <div class="login1" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-6">
                    <h2 style="color: white">WAITER LOGIN</h2>
                    <img src="images/waiter.jpg"class="img-circle" alt="" >
                </div>
                <div class="col-lg-3 col-md-3"></div>
            </div>
        </div>
    </div>
    <div class="signin" id="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3"></div>

                <form action="" method="post">
                    <div class="col-lg-6 col-md-6">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                            <input type="text"  class="form-control"aria-describedby="sizing-addon1" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                            <input type="password"  class="form-control"aria-describedby="sizing-addon1" placeholder="Enter password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit_waiter"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</button>
                        <button id="home" class="btn btn-default"><a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Home</a></button>
                    </div>
                </form>

                <div class="col-lg-3 col-md-3"></div>
            </div>
        </div>
    </div>
</div>


</body>
</html>