
    <?php
    $query= "SELECT * FROM cook";
    $result = mysqli_query($db,$query);
        
        if(mysqli_num_rows( $result)>0){
        
        echo "<table class='table table-bordered table-hover' id='mytab' >";
            echo "
                   <thead style='background-color:blue; color:white;'>
                    <tr>
                        <td>ID</td>
                        <td>IMAGE</td>
                        <td>FIRST NAME</td>
                        <td>LAST NAME</td>
                        <td>USERNAME</td>
                        <td>EMAIL</td>
                        <td>MOBILE</td>
                        <td>DATE</td>
                    </tr>
                    </thead>
                ";
               echo "<tbody>";
        while($row=mysqli_fetch_assoc($result)){
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
        echo "<td>$userID</td>";
        echo "<td><img width='80' src='upload/$image' alt='pass'></td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$username</td>";
        echo "<td>$email</td>";
        echo "<td>$number</td>";
        echo "<td>$reg_date</td>";
       echo "<td><a href='Admin_interface.php?source=edit&editCook={$userID}' class='btn btn-success'> Edit</a></td>";
        echo "<td><a href='Admin_interface.php?source=view_all_cook&deleteID={$userID} ' class='btn btn-danger'onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
    }
        }

    echo " </tbody>";
        echo "</table>";
    ?>

<?php 

if(isset($_GET['deleteID'])){
    
    $cook_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM cook WHERE cookID = $cook_delete";
    $delete_result = mysqli_query($db,$delete_query); 
      
}

    
?>

<script>
 $(document).ready(function(){
      $("#mytab").DataTable();
     $("#mytab thead:even")
         .css({"background-color":"blue"})
         .css({"color":"white"});
        $("table").css({"margin-top":"5px"});
   
    
 });

</script>   
   

