<table class="table table-bordered table-hover" id="mytabw">
    <thead style="background-color:blue; color:white;">
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

    <tbody>
    <?php
    $query= "SELECT * FROM waiter";
    $result = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result)){
        $waiterID = $row['waiterID'];
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
        echo "<td>$waiterID</td>";
        echo "<td><img width='80' src='upload/$image' alt='pass'></td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$username</td>";
        echo "<td>$email</td>";
        echo "<td>$number</td>";
        echo "<td>$reg_date</td>";
       echo "<td><a href='Admin_interface.php?source=edit_waiter&editID={$waiterID}' class='btn btn-success'> Edit</a></td>";
        echo "<td><a href='Admin_interface.php?source=view_all_waiter&deleteID={$waiterID}' class='btn btn-danger' onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<?php 

if(isset($_GET['deleteID'])){
    
    $waiter_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM waiter WHERE waiterID = $waiter_delete";
    $delete_result = mysqli_query($db,$delete_query); 
      
}

    
?>

<script>

$(document).ready(function(){
    $("#mytabw").DataTable();
    
});
</script>
