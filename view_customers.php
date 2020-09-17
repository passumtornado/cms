<?php
$query_select = "SELECT * FROM customer ORDER BY username ASC ";
$result = mysqli_query($db,$query_select);

?>
<div class="container">
<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>USERNAME</th>
             <th>EMAIL</th>
             <th>MOBILE NO.</th>
             <th>ADDRESS LINE 1</th> 
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $customerID = $row['customerID'];
        $username = $row['username'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address1'];
        
        

        echo "<tr>";
     
        echo "<td>$customerID</td>";
        echo "<td>$username</td>";
        echo "<td> $email</td>";
        echo "<td>$mobile</td>";
        echo "<td>$address</td>";
         
          echo "</tr>";
        }
        
        ?>
    
    
    </table>
    
    </div>

</div>
<script>
$(document).ready(function(){
    $("#menu_data").DataTable();
});

</script>

