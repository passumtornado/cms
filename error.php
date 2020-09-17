<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>


</head>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">MBP canteen</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>About us</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
            <li style="width: 300px;left: 10px; top: 10px"><input type="text" class="form-control" id="search"></li>
            <li style="top: 10px;left: 20px;"><input type="submit" class="btn btn-primary" id="search_btn"> </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a>
              <div class="dropdown-menu" style="width: 400px;">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-md-3">Food ID</div>
                              <div class="col-md-3">Food Image</div>
                              <div class="col-md-3">Food Name</div>
                              <div class="col-md-3">price</div>
                          </div>
                      </div>
                      <div class="panel-body"></div>
                      <div class="panel-footer"></div>
                  </div>
              </div>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sigin</a>
               <ul class="dropdown-menu">
                   <div style="width: 300px;">
                       <div class="panel panel-primary">
                           <div class="panel-heading">Login</div>
                           <div class="panel-heading">
                               <label for="email">Email</label>
                               <input type="email" class="form-control" id="email" required>
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="password" required>
                               <p><br/></p>
                               <a href="#" style="color: white;list-style: none;">Forgotten password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="login">
                           </div>
                           <div class="panel-footer" id="e_msg"></div>
                       </div>
                   </div>
               </ul>

            </li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
        </ul>

    </div>
</div>
  <p><br/></p>
  <p><br/></p>
  <p><br/></p>
<div class="container-fluid">
     <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-2">
             <div class="nav nav-pills nav-stacked">
                 <li class="active"><a href="#" ><h4>MENU</h4></a></li>
                 <li><a href="#"><span class="glyphicon glyphicon-cutlery"> Breakfast</span></a> </li>
                 <li><a href="#"><span class="glyphicon glyphicon-cutlery"> Lunch</span></a> </li>
                 <li><a href="#"><span class="glyphicon glyphicon-cutlery"> Supper</span></a> </li>
             </div>
             <div class="nav nav-pills nav-stacked">
                 <li class="active"><a href="#" ><h4>SPECIAL MENU</h4></a></li>
                 <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger"> Combo</span></a> </li>
                 <li><a href="#"><span class="glyphicon glyphicon-list"> Envent</span></a> </li>

             </div>
         </div>
         <div class="col-md-8">
            
         </div>
     </div>

 </div>

</body>
</html>