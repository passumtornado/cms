<?php
session_start();
if(!isset($_SESSION['username'])){
    
   header("location: cook_login.php");
}


include "includes/db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/jquery.dataTables.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/interfaces.css">
    <title>MPB COOK</title>
     <style>
    
        body{
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Verdana,Gevena,sans-serif;
            font-size: 12px;
        }
        
    </style>
   
 </head>
    
<body>
    
    
   <div id="wrapper" >
       
      <div id="banner">
        <img src="images/banner.jpg" width="100%" class="img-responsive" >
    </div>
    
       <div id="header">
           
         <a href="index.php"><div id="logo">
             <img src="images/LOGO.jpg" width="260">
             </div></a>  
           
           <ul id="navigation_menu">
               
                <li class="active"><a href="interface.php"?home.php><span class="glyphicon glyphicon-home"></span> Home</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-file"></span>Inventory</a>
                  <ul>
              
               <li><a href="interface.php?source=inventory">Add Stock</a></li>
                  <li><a href="interface.php?source=viewstock">View Stock</a></li>
                   </ul> 
               
               </li>
                 
                <li><a href="#"><span class="glyphicon glyphicon-list"></span>Menu</a>
                  <ul>
                      <li><a href="interface.php?source=category">add category</a></li>
                    <li><a href="interface.php?source=addfood">Add Menu</a></li>
                      <li><a href="interface.php?source=viewMenu">View Menu</a></li>
                    </ul>
               
               </li>

              
               
               <li><a href="#"><span class="glyphicon glyphicon-user"></span>Special</a>
               
                   <ul>
                      <li><a href="interface.php?source=event">View special</a></li>
                    </ul>
               
               
               </li>
                    
               
                   
                <li><a href="interface.php?source=orders"><span class="glyphicon glyphicon-shopping-cart"></span>Orders</a>
                  
               </li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
           </ul>
           
       </div>
     <!--END of HEARDER-->
       
       <div id="main-contents">
         <?php
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }
    else{
        $source = '';
    }
    switch($source){
        case 'inventory';
            include "inventory.php";
            break;
        case 'addfood';
            include "add_meal.php";
            break;
         case 'addevent';
            include "add_special.php";
            break;
         case 'viewfood';
            include "view_all_food.php";
            break;
         case 'viewMenu';
            include "view_menu.php";
            break;
        case 'category';
            include "add_category.php";
            break;
        case 'viewstock';
            include "view_inventory.php";
            break;
        case 'viewsupper';
            include "view_supper.php";
            break;
        case 'edit_breakfast';
            include "edit_breakfast.php";
            break;
         case 'edit_menu';
            include "edit_meal.php";
            break;
           case 'edit_stock';
            include "edit_stock.php";
            break;
         case 'event';
            include "cook_event.php";
            break;

         case 'orders';
            include "cook_orders.php";
            break;
        case 'edit_orders';
            include "edit_orders.php";
            break;


        case 'canteen';
            include "canteen.php";
            break;

        default:
             include "cook_orders.php";
            break;

    }

    ?>
       
       </div>
       <!--END OF NAIN CONTENT-->
       <div id ="sidebar">
           <div class="panel panel-primary">
           <div class="panel-heading">
               <h3 class="panel-title">COOK INTERFACE</h3>
            </div>
               <div class="panel-body">
                <div id="supper">
                <h4><i>Welcome</i> <b><?php echo $_SESSION['username'] ?></b></h4><br /><hr/>
                    <ul>
                        <li><p>We entreat you to carefully navigate and manage the system perfectly.</p></li>
                        <li><p>The interface provide easy access and wonderful experience.</p></li>
                    </ul><hr/>
                    
                   </div>
             <div id="breakfast">
                   <h4>MBP CANTEEN</h4><hr/>
                    <p>Contact: 0241333114</p>
                    <p>email: mbp@canteen.com</p>
                    <p>MBPCanteen web application is provide user-friendly interface.</p><hr />
                    
                   </div>
                    <div id="lunch">
                     <h4>Foods Availabe</h4>
                  <img src="images/slideshow1.jpg" width="250px"  class="img-thumbnail img-responsive">
                   </div>
                   
                    <div id="family">
                         <h4>family</h4>
                  <img src="images/breakfast.jpg" width="250px" class="img-thumbnail img-responsive">
           </div>
          
               </div>
           </div>
      
    
       </div>
       <!--END OF SIDEBAR-->
       
        <!--  <div class="footer" id="footer">
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
    </div>-->
       
    </div>
     
   
   
</body>
    
</html>