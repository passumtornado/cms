<?php
$query_select = "SELECT * FROM sales ORDER BY date ASC ";
$result = mysqli_query($db,$query_select);

?>
<p><br/></p>
<p><br/></p>
<div class="container">
    <h3 class="text-center">SALES TABLE</h3>
<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>food Name</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Address</th>
             <th>Transaction ID</th>
             <th>Date &amp; time</th>
             <th>customer</th>
            
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $salesID = $row['salesID'];
        $oID = $row['orderID'];
        $c_ID = $row['c_ID'];
        $m_ID = $row['m_ID'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['price'];
        $t_ID = $row['tx_ID'];
        $address = $row['address'];
        $date = $row['date'];
            
        echo "<tr>";
     
        echo "<td> $salesID </td>";
        echo "<td>$foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$address</td>";
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
