

<?php
$query_select = "SELECT * FROM event ORDER BY deliveryDate ASC ";
$result = mysqli_query($db,$query_select);

?>
<p><br/></p>
<p><br/></p>

<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>EVENT NAME</th>
             <th>FOOD NAME</th>
             <th>QUANTITY</th>
             <th>DELIVERY DATE</th> 
             <th>CUSTOMER ID</th>
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $eID = $row['evenID'];
        $eventname = $row['eventName'];
        $quantity = $row['quantity'];
        $food = $row['foodItems'];
        $time = $row['deliveryDate'];
        $customer = $row['c_ID'];
        

        echo "<tr>";
     
        echo "<td>$eID</td>";
        echo "<td> $eventname</td>";
        echo "<td>$food</td>";
        echo "<td>$quantity</td>";
         echo "<td>$time</td>";
         $sql = "SELECT * FROM customer WHERE customerID='$customer'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $name = $row['username'];
         echo "<td>$name</td>";
         }
          echo "</tr>";
        }
        
        ?>
    
    
    </table>
    
    </div>


<script>
$(document).ready(function(){
    $("#menu_data").DataTable();
});

</script>

