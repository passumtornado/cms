<?php
session_start();
$_SESSION['message']= "";

if(isset($_POST['create_admin'])){

    $firstname = mysqli_real_escape_string($db,$_POST['firstname']) ;
    $lasttname = mysqli_real_escape_string($db,$_POST['lastname']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $confirm_pass = mysqli_real_escape_string($db,$_POST['confirmedpass']);
    $gender = mysqli_real_escape_string($db,$_POST['gender']);
    $dob = $_POST['dob'];
    $number = $_POST['mobile'];

    //uploading the image
    $filename = $_FILES['images']['name'];
    $filesize = $_FILES['images']['size'];
    $tempname = $_FILES['images']['tmp_name'];
    $filetype = $_FILES['images']['type'];
    $foldername = 'images/';

    $send = move_uploaded_file($tempname, $foldername.$filename);

    if($send){
        $admin_check = "SELECT * FROM admin WHERE username = '$username' OR email ='$email' lIMIT 1";
        $admin_result = mysqli_query($db,$admin_check);
        $admin = mysqli_fetch_assoc($admin_result);
        if($admin){
            if($admin['username']===$username){
                echo "<script>alert('username already exist')</script>";

            }
            if($admin['email']===$email){
                echo "<script>alert('email already exist')</script>";

            }
        }

        if($password!=$confirm_pass){
            echo "<script>alert('please password do not match')</script>";
        }
        else{
            $password = trim( md5($password));

        }

        $query = "INSERT INTO admin (firstname,lastname,,username,email,password,dob,gender,mobile,image,filesize,filetype)";

        $query .= "VALUES('{$firstname}','{$lasttname}','{$username}','{$email}','{$password}','{$dob}','{$gender}','{$mobile}','{$filename}','{$filetype}','{$filesize}')";
        $result = mysqli_query($db,$query);
        $_SESSION['username']= $username;
        if($result===true){
            echo "<script>alert('you have successfully added new admin')</script>";
            $_SESSION['message']= "You have successfully added new admin";
        }
        else{
            echo "<script>alert('Addition failed Try again')</script>";
            $_SESSION['message']="Registration failed";
        }

    }else {
        $_SESSION['message']="could not upload image";
    }

}














if(isset($_POST['create_admin'])){

    $firstname = mysqli_real_escape_string($db,$_POST['firstname']) ;
    $lasttname = mysqli_real_escape_string($db,$_POST['lastname']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $confirm_pass = mysqli_real_escape_string($db,$_POST['confirmedpass']);
    $gender = mysqli_real_escape_string($db,$_POST['gender']);
    $dob = $_POST['dob'];
    $role = $_POST['role'];
    $mobile = $_POST['mobile'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['temp_name'];

    //uploading the image


    $send = move_uploaded_file($upload_image_temp,"upload/$upload_image");

    $admin_check = "SELECT * FROM cook WHERE username = '$username' OR email ='$email' lIMIT 1";
    $admin_result = mysqli_query($db,$admin_check);
    $admin = mysqli_fetch_assoc($admin_result);
    if($admin){
        if($admin['username']===$username){
            echo "<script>alert('username already exist')</script>";

        }
        if($admin['email']===$email){
            echo "<script>alert('email already exist')</script>";

        }
    }

    if($password!=$confirm_pass){
        echo "<script>alert('please password do not match')</script>";
        $_SESSION['message']= "password do not match";
    }
    else{
        $password = trim( md5($password));

    }

    $query = "INSERT INTO cook (firstname,lastname,,username,email,password,dob,gender,mobile,role,image,)";

    $query .= "VALUES('{$firstname}','{$lasttname}','{$username}','{$email}','{$password}','{$dob}','{$gender}',{$mobile},'{$role}','{$upload_image}')";
    $result = mysqli_query($db,$query);
    $_SESSION['username']= $username;
    if($result===true){
        echo "<script>alert('you have successfully added new admin')</script>";

    }
    else{
        echo "<script>alert('Addition failed Try again')</script>";
    }
}
?>
