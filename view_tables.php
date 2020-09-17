<?php
$query_select = "SELECT * FROM customer_table ORDER BY tabletag ASC ";
$result = mysqli_query($db,$query_select);

 if(isset($_POST['checkboxArray'])){
    $checkbox = $_POST['checkboxArray'];
    foreach($checkbox as $menuValueID){
      $bulk_options = $_POST['bulk_options'];
        
        switch($bulk_options){
            case 'empty':
                
                $bulk_update = "UPDATE customer_table SET tablestatus = '$bulk_options' WHERE tableID = '$menuValueID'";
                $bulk_result = mysqli_query($db,$bulk_update);
                if(!$bulk_result){
                    echo "<div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>could not updated</p></b>
                 </div>";
                }
                
                break;
            
             case 'occupied':
                
                $bulk_update = "UPDATE customer_table SET tablestatus = '$bulk_options' WHERE tableID = '$menuValueID'";
                $bulk_result = mysqli_query($db,$bulk_update);
                if(!$bulk_result){
                    echo "<div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>could not updated</p></b>
                 </div>";
                }
                
                break;
            
             case '0':
                
                $bulk_update = "UPDATE customer_table SET c_ID = '$bulk_options' WHERE tableID = '$menuValueID'";
                $bulk_result = mysqli_query($db,$bulk_update);
                if(!$bulk_result){
                  echo "<div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>could not updated</p></b>
                 </div>";
                }
                
                break;
                
           
               
               
        }
      
    }
}


?>
<div class="container">
     <h3 class="text-center">VIEW TABLES</h3>
<div class= "table-responsive">
    <form method="post" action="">
    <table id="menu_data" class="table table-striped table-bordered">
         <div id='bulkOperations'  class='col-xs-4'>
             
                    <select id='' name='bulk_options' class='form-control'>
                    <option value=''>select Option</option>
                    <option value='empty'>status1</option>
                    <option value='occupied'>status2</option>
                    <option value='0'>customer</option>
                    </select>
                 </div>
         <div class='col-xs-4'>
                 <input type='submit' name='submit' class='btn btn-primary' value='Apply'>   
         </div>
    <p><br/></p>
    <p><br/></p>
    <thead>
        <tr>
             <th><input type='checkbox' id='selectAll'></th>
             <th>ID</th>
             <th>Table Tag</th>
             <th>Table Status</th>
             <th>Customer</th>
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $ID = $row['tableID'];
        $c_ID = $row['c_ID'];
        $Tabletag = $row['Tabletag'];
        $tablestatus = $row['tablestatus'];
            
        echo "<tr>";
        echo "<td><input type='checkbox' class='checkBoxes' name='checkboxArray[]' value='$ID'></td>";
        echo "<td>$ID</td>";
        echo "<td>$Tabletag</td>";
        echo "<td>$tablestatus</td>";
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
    </form>
    </div>

</div>
<script>
$(document).ready(function(){
    $("#menu_data").DataTable();
});

</script>

