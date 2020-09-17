<?php 


if(isset($_SESSION['admin'])){
    $username = $_SESSION['admin'];
    
    $query_admin = "SELECT * FROM admin WHERE username = '$username'";
    
    $query_result = mysqli_query($db,$query_admin);
    if(mysqli_num_rows($query_result)>0){
        while($row = mysqli_fetch_array($query_result)){
            $username = $row['username'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];
        }
    }
}

?>
<?php

if(isset($_POST['update'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];
    
    $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
    if($send){

         $update_query= "UPDATE admin SET 
         username='$username',email='$email',password='$password',image='$upload_image' WHERE username =  '$username'";
         $update_result = mysqli_query($db,$update_query);
    
    if(!$update_result){
        $message = " <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p> Query failed!!!</p></b>
                </div>";
    }
        
    else{
         $message = "
            
                 <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p> successfully Updated!!!</p></b>
                </div>
            ";
        
    }
        
    }else{
        $message = "<div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p> image couldn't upload</p></b>
                </div>";
        exit();
    }
    
   
}else{
    $message = "";
}

?>
<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div> 
                <form action=" " method="post" enctype="multipart/form-data">
                <div class="col-lg-6 col-md-6">
                    <div class="">
                      <?php echo $message; ?>
                    </div>
                  
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-users" aria-hidden="true"></i> </span>
                        <input type="text" value="<?php echo $username;?>" name="username" class="form-control"aria-describedby="sizing-addon1" placeholder="Username" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                        <input type="email" value="<?php echo $email;?>" name="email" class="form-control"aria-describedby="sizing-addon1" placeholder="Email" required>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                        <input type="password" value="<?php echo $password;?>" name="password" class="form-control"aria-describedby="sizing-addon1" placeholder="Enter password"  required>
                    </div>
                    
                    <div class="input-group input-group-lg">
                       <img  width="80" src="upload/<?php  echo $image?>" alt=""><br />
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary" name="update"><span class="glyphicon glyphicon-user"></span> Update admin</button>
                </div>
            </form>
           
            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div> 
