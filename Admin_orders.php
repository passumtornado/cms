<?php
$query_select = "SELECT * FROM customer_order ORDER BY date ASC ";
$result = mysqli_query($db,$query_select);

?>
<div class="container">
     <h3 class="text-center">ORDERS TABLE</h3>
<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>Meal ID</th>
             <th>Quantity</th>
             <th>Payment Status</th>
             <th>Transaction ID</th>
             <th>Date &amp; time</th>
             <th>customer</th>
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $ID = $row['orderID'];
        $c_ID = $row['c_ID'];
        $m_ID = $row['m_ID'];
        $quantity = $row['quantity'];
        $p_status = $row['p_status'];
        $t_ID = $row['t_ID'];
        $date = $row['date'];
            
        echo "<tr>";
     
        echo "<td>$ID</td>";
        echo "<td>$m_ID</td>";
        echo "<td>$quantity</td>";
        echo "<td>$p_status</td>";
        echo "<td>$t_ID</td>";
        echo "<td>$date</td>";
        $sql = "SELECT * FROM customer WHERE customerID='$c_ID'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $username = $row['username'];
        echo "<td>$username</td>";
         }
        
        
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

