<?php
session_start();
if(!isset($_SESSION['admin'])){
    
   header("location: admin_login.php");
}


include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="gstatic/loader.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/jquery.dataTables.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.theme.css">
     <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/signing.css">
    <title>MPB CANTEEN</title>
</head>
<body>

<div id="wrapper">
    <?php include "includes/navigation.php" ?>
    <div id="page-wrapper">

     <?php

     echo "<h2 class=\"page-header\"> {$_SESSION['success']} <small>{$_SESSION['admin']}</small>
        </h2>";
     ?>


        <?php
        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        else{
            $source = '';
        }
        switch($source){
            case 'view_all_users';
               include "view_all_users.php";
                break;
            case 'view_all_cook';
               include "includes/view_all_cook.php";
                break;
            case 'add_users';
                include "users.php";
                break;
            case 'edit';
               include "edit.php";
                break;
            case 'view_all_waiter';
                include "view_all_waiter.php";
                break;
            case 'edit_waiter';
                include "edit_waiter.php";
                break;
             case 'menu';
                include "admin_view_menu.php";
                break;
             case 'customer';
                include "view_customers.php";
                break;
             case 'inventory';
                include "admin_view_invent.php";
                break;
            case 'profile';
                include "profile.php";
                break;
            case 'report';
                include "report.php";
                break;
             case 'profileView';
                include "view_admin.php";
                break;
            case 'orders';
                include "Admin_orders.php";
                break;
            case 'sales';
                include "Admin_sales.php";
                break;
            default:
                include "includes/mychart.php";
                break;

        }

        ?>

    </div>

</div>


</body>

</html>

