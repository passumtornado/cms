<?php 
if(isset($_SESSION['admin'])){
    $username = $_SESSION['admin'];
    
    $query_admin = "SELECT * FROM admin where username = '$username'";
    
    $query_result = mysqli_query($db,$query_admin);
    if(mysqli_num_rows($query_result)>0){
        while($row = mysqli_fetch_array($query_result)){
            $username = $row['username'];
            $email = $row['email'];
            $image = $row['image'];
        }
    }
}

?>
<div class="container-fluid">
<div class="row">
    
    <div class="col-md-3"></div>
    <div class="col-md-6">
    
    <div class="panel panel-primary">
        <div class="panel-heading">
        <img src='upload/<?php echo $image?>' width="500px" height="300px" class="img-resposive img-thumbnail" style="margin-left:10px;">
        </div>
        <div class="panel-body">
        <table>
          <thead>
          <tr><td><h3><b>Username:</b></h3></td><td><h3><?php echo $username;?></h3></td></tr>  
           <tr><td><h3><b>Email:</b></h3></td><td><h3><?php echo $email;?></h3></td></tr> 
         </thead>  
            
        </table>
        </div>
        <div class="panel-footer"><h3>ADMINISTRATOR PROFILE</h3></div>
        
        </div>
    
    </div>
    <div class="col-md-3"></div>
    </div>

</div>