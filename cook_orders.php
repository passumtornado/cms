<?php

    $orders_list = "SELECT o.orderID,o.c_ID,o.m_ID,o.quantity,o.t_ID,o.p_status,o.date,p.foodName,p.amount,p.image FROM customer_order o,menu p WHERE o.c_ID=o.c_ID AND o.m_ID=p.m_ID";
    $query = mysqli_query($db,$orders_list);


  if(isset($_POST['checkboxArray'])){
    $checkbox = $_POST['checkboxArray'];
    foreach($checkbox as $menuValueID){
     echo $bulk_options = $_POST['bulk_options'];
        
       switch($bulk_options){
            case 'delete':
                
                $bulk_delete = "DELETE  FROM menu WHERE m_ID = {$menuValueID}";
                $bulk_result = mysqli_query($db,$bulk_delete);
                if($bulk_result){
                    echo "successfully Deleted";
                }else{
                    echo "query failed";
                }
                
                break;
                
           
               
               
        }
      
    }

  }
?>


<div class= "table-responsive">
    <form method="post" action="">
    <table id="menu_data" class="table table-striped table-bordered">
       <div id='bulkOperations'  class='col-xs-4'>
             
                    <select id='' name='bulk_options' class='form-control'>
                    <option value=''>select Option</option>
                    <option value='preparing'>preparing</option>
                    <option value='halfway'>halfway</option>
                     <option value='complete'>complete</option>
                    <option value='delete'>Delete</option>
                   
                   
                    </select>
                 </div>
                 <div class='col-xs-4'>
                 <input type='submit' name='submit' class='btn btn-primary' value='Apply'>   
         </div>
        <p><br /></p>
        <p><br /></p>
    <thead>
        <tr>
             <th><input type='checkbox' id='selectAll'></th>
             <th>c_ID</th>
             <th>IMAGE</th>
             <th>FOOD NAME</th>
             <th>Quantity</th>
             <th>PRICE</th> 
             <th>Payment Status</th>
             <th>Status</th>
             <th>Date</th>
             <th>ACTION</th>
             
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($query)){
        $oID = $row['orderID'];
        $cID = $row['c_ID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $p_status =$row['p_status'];
        $food_status = $row['p_status'];
        $date = $row['date'];
        

        echo "<tr>";
        echo "<td><input type='checkbox' class='checkBoxes' name='checkboxArray[]' value='$oID'></td>";
        echo "<td>$cID</td>";
        echo "<td><img width='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$p_status</td>";
        echo "<td>$food_status</td>";
        echo "<td>$date</td>";
        echo "<td><a href='interface.php?source=edit_orders&editID={$oID}' class='btn btn-success'>submit</a></td>";
         
          echo "</tr>";
        }
        
        ?>
    
    </table>
    </form>
    </div>


<script>
$(document).ready(function(){
    $("#menu_data").DataTable();
});

</script>
