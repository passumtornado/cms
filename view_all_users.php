<?php 

 $query= "SELECT * FROM cook";
 $w_query= "SELECT * FROM waiter";

 $users_result = mysqli_query($db,$query);
$w_results = mysqli_query($db,$w_query);
 if($users_result && $w_results){
     
     
     if(mysqli_num_rows($users_result)>0 || mysqli_num_rows($w_results)>0){
         
         
            echo "<table class='table table-bordered table-hover' id='mytab' >";
             echo "<thead >";
             echo " <tr>";
             echo "<td>IMAGE</td>";
             echo "<td>FIRST NAME</td>";
             echo "<td>LAST NAME</td>";
             echo " <td>USERNAME</td>";
             echo "<td>EMAIL</td>";
             echo "<td>MOBILE</td>";
             echo "<td>ROLE</td>";
             echo " <td>GENDER</td>";
             echo " </tr>";
             echo " </thead>";
         
             echo "<tbody>";
         
     while($row=mysqli_fetch_assoc($users_result)){
        $userID = $row['cookID'];
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
        $reg_date = $row['reg_date'];

        echo "<tr>";
        echo "<td><img width='80' src='upload/$image' alt='pass'></td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$username</td>";
        echo "<td>$email</td>";
        echo "<td>$number</td>";
        echo "<td>$role</td>";
        echo "<td>$gender</td>";
         echo "</tr>";
          
              
       
     }
         
        while($row=mysqli_fetch_assoc($w_results)){
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
        $reg_date = $row['reg_date'];

        echo "<tr>";
        echo "<td><img width='80' src='upload/$image' alt='pass'></td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$username</td>";
        echo "<td>$email</td>";
        echo "<td>$number</td>";
        echo "<td>$role</td>";
        echo "<td>$gender</td>";
         echo "</tr>";
          
              
       
     }
         echo "</tbody>";
         echo "</table>";
         mysqli_free_result($users_result);
 }else {
         echo "<script>alert('no record matching')</script>";
     }
 }else{
     die ('query failed').mysqli_error($db);
 }
?>

<script>
 $(document).ready(function(){
     $("#mytab").DataTable();
     $("#mytab thead:even")
         .css({"background-color":"blue"})
         .css({"color":"white"});      
    
 });

</script>   
   
        
        
       
        
        
        
       
   
   

   