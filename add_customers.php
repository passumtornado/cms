<?php
require"includes/db.php";


?>
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
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/signing.css">
    <title>MPB CANTEEN</title>

</head>
<body>
<?php

    if(isset($_POST['create_admin'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedpass = $_POST['confirmedpass'];
        $upload_image = $_FILES['image']['name'];
        $upload_image_temp = $_FILES['image']['tmp_name'];

        $send = move_uploaded_file($upload_image_temp,"upload/$upload_image");


        if($password === $confirmedpass){
            $password = sha1($password);
        }
        else{
            echo "<script> alert('password do not match')</script>";
        }

        $query = "INSERT INTO customers (first_name,last_name,email,password,image,reg_date) VALUES('$firstname','$lastname','$email','$password','$upload_image','')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<script> alert('query executed')</script>";
        }
        else{
            echo mysqli_error($db);
           // echo "<script> alert('query failed')</script>";
        }

    }

?>
<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <form action="add_customers.php" method="post" enctype="multipart/form-data">
                <div class="col-lg-6 col-md-6">
                    <div class=" header" id="add">
                        <h2>ADD ADMIN</h2>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" name="firstname" class="form-control"aria-describedby="sizing-addon1" placeholder="First name" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" name="lastname" class="form-control"aria-describedby="sizing-addon1" placeholder="Last name"  required>
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
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                        <input type="password" class="form-control"aria-describedby="sizing-addon1" placeholder="Confirmed password" name="confirmedpass" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" class="inputfile">
                    </div>

                    <button type="submit" class="btn btn-primary" name="create_admin"><span class="glyphicon glyphicon-log-in"></span> Add</button>

                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>

</body>
</html>