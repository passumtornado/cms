<?php
if(isset($_POST['create_admin'])){

    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob=$_POST['dob'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];

    if($role == "cook"){
        $password = md5($password);
        $user_check = "SELECT * FROM cook WHERE username = '$username' OR email ='$email'";
        $user_result = mysqli_query($db,$user_check);
        if($user_result){
            $user = mysqli_num_rows($user_result);
            if($user > 0){
                $message = "user already exist";
            }
            else{
                $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
                if($send){
                    $query = "INSERT INTO cook(firstname,lastname,username,email,password,dob,gender,mobile,role,image)VALUES(' $firstname','$lastname','$username','$email','$password','$dob','$gender','$mobile','$role','$upload_image')";
                    $query_result= mysqli_query($db,$query);

                    if(!$query_result){
                        $message = "Query error";
                    }else{
                        $message = "You have added new user";
                    }
                }
                else{
                    $message = "file move error";
                }
            }
        }
        else{
            $message = "User Check error";
        }
    }
    else{
        $password = md5($password);
        $user_check = "SELECT * FROM waiter WHERE username = '$username' OR email ='$email'";
        $user_result = mysqli_query($db,$user_check);
        if($user_result){
            $user = mysqli_num_rows($user_result);
            if($user > 0){
                $message = "user already exist";
            }
            else{
                $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
                if($send){
                    $query = "INSERT INTO waiter(firstname,lastname,username,email,password,dob,gender,mobile,role,image)VALUES(' $firstname','$lastname','$username','$email','$password','$dob','$gender','$mobile','$role','$upload_image')";
                    $query_result= mysqli_query($db,$query);

                    if(!$query_result){
                        $message = "Query error";
                    }else{
                        $message = "You have added new user";
                    }
                }
                else{
                    $message = "file move error";
                }
            }
        }
        else{
            $message = "User Check error";
        }
    }


}

else {
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
                        <input type="text" name="firstname" class="form-control"aria-describedby="sizing-addon1" placeholder="First name" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" name="lastname" class="form-control"aria-describedby="sizing-addon1" placeholder="Last name"  required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-users" aria-hidden="true"></i> </span>
                        <input type="text"  name="username" class="form-control"aria-describedby="sizing-addon1" placeholder="Username" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                        <input type="email"  name="email" class="form-control"aria-describedby="sizing-addon1" placeholder="Email" required>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                        <input type="password" name="password" class="form-control"aria-describedby="sizing-addon1" placeholder="Enter password"  required>
                    </div>
                    <div class="input-group input-group-lg">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="m">select option</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> </span>
                        <input type="date" class="form-control"aria-describedby="sizing-addon1" placeholder="Date" name="dob" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-phone" aria-hidden="true"></i> </span>
                        <input type="number" class="form-control"aria-describedby="sizing-addon1" placeholder="Number" name="mobile" size="10" maxlength="10" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <label>Role</label>
                        <select class="form-control" name="role">
                            <option value="selectoption">select options</option>
                            <option value="cook">Cook</option>
                            <option value="waiter">Waiter</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg">
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary" name="create_admin"><span class="glyphicon glyphicon-log-in"></span> Add</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>
