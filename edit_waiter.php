<?php 

if(isset($_GET['editID'])){
    
   $edit_waiter = $_GET['editID'];
}

 $query= "SELECT * FROM waiter WHERE waiterID= $edit_waiter ";
 $result = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result)){
        $userID = $row['waiterID'];
        $image = $row['image'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $username = $row['username'];
        $email =$row['email'];
        $password = $row['password'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $number = $row['mobile'];
        $role = $row['role'];
        
    }

if(isset($_POST['update_waiter'])){
    
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob=$_POST['dob'];
    $mobile = $_POST['mobile'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];
    
    $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
   
            $password = md5($_POST['password']);
         $update_query= "UPDATE waiter SET firstname='$firstname',lastname='$lastname',username='$username',email='$email',password='$password',dob='$dob',mobile='$mobile',image='$upload_image' WHERE waiterID = $edit_waiter  ";
         $update_result = mysqli_query($db,$update_query);
    
    if(! $update_result){
        $message = "Query error";
    }
        
    else{
         $message = "successfully updated";
        
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
                    <h4 class="text-center"><?php echo $message; ?></h4>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" value="<?php echo $firstname;?>" name="firstname" class="form-control"aria-describedby="sizing-addon1" placeholder="First name" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" value="<?php echo $lastname;?>" name="lastname" class="form-control"aria-describedby="sizing-addon1" placeholder="Last name"  required>
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
                        <span class="input-group-addon" id="sizing-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> </span>
                        <input type="date" value="<?php echo $dob;?>" class="form-control"aria-describedby="sizing-addon1" placeholder="Date" name="dob" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-phone" aria-hidden="true"></i> </span>
                        <input type="number" value="<?php echo $mobile;?>" class="form-control"aria-describedby="sizing-addon1" placeholder="Number" name="mobile" size="10" maxlength="10" required>
                    </div>
                    
                    <div class="input-group input-group-lg">
                       <img  width="80" src="upload/<?php  echo $image?>" alt=""><br />
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary" name="update_waiter"><span class="glyphicon glyphicon-user"></span> Update waiter</button>
                </div>
            </form>
           
            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div> 

    
   

