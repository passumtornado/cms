<?php

session_start();
$error = array();

if(isset($_POST['submit_admin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username= mysqli_real_escape_string($db,$username);
    $password= mysqli_real_escape_string($db,$password);

    if(empty($username)){
        array_push($error,"Username is required");
    }
    if(empty($password)){
        array_push($error,"password is required");
    }
    if(count($error)==0){
        $password = md5($password);
        $query ="SELECT * FROM admin WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username']= $username;
            $_SESSION['success']= "Welcome Adim";

            header('location: Admin_interface.php');
        }else{
            array_push($error,"Wrong Username/password");
        }
    }


    }

if(preg_match("!image!",$_FILES['image']['type'])){
    if(copy($_FILES['image']['tmp_name'],$images_path)){



    }
    else {
        echo "<script>alert('image upload failed')</script>";
        $_SESSION['message']= "image upload failed";
    }

}
else{

    $_SESSION['message']="please Upload only GIF , JPG, or png images";
}

?>

