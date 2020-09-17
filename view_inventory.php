<?php 

if(isset($_GET['deleteID'])){
    
    $stock_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM stock WHERE stockID = '$stock_delete'";
    $delete_result = mysqli_query($db,$delete_query); 
    echo "
         <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h4 class='text-center'>stock Item deleted</h4></b>;
                </div>
    " ;
}


if(isset($_POST['checkboxArray'])){
    $checkbox = $_POST['checkboxArray'];
    foreach($checkbox as $menuValueID){
        $bulk_options = $_POST['bulk_options'];
        
        switch($bulk_options){
            case 'delete':
                
                $bulk_delete = "DELETE  FROM stock WHERE stockID = {$menuValueID}";
                $bulk_result = mysqli_query($db,$bulk_delete);
                if($bulk_result){
                    echo "<script>alert('stock item successfully deleted')</script>";
                }else{
                    echo "query failed";
                }
                
                break;
                
           
               
               
        }
      
    }
}

echo "<form method='post' action=''>";
           
$stock_query= "SELECT * FROM stock ORDER BY stockName ASC ";



 $stock_result = mysqli_query($db,$stock_query);
 
 if($stock_result){
     
     
     if(mysqli_num_rows($stock_result)>0){
         
            echo "<table class='table table-bordered table-hover' id='mytab' >";
             echo "<div id='bulkOperations'  class='col-xs-4'>
             
                    <select id='' name='bulk_options' class='form-control'>
                    <option value=''>select Option</option>
                    <option value='clone'>Clone</option>
                    <option value='delete'>Delete</option>
                   
                   
                    </select>
                 </div>
                 <div class='col-xs-4'>
                 <input type='submit' name='submit' class='btn btn-primary' value='Apply'>
                 
                 
                 </div>
             ";
             echo "<p><br /></p>";
              echo "<p><br /></p>";
             echo "<thead >";
             echo " <tr>";
             echo "<th><input type='checkbox' id='selectAll'></th>";
             echo "<th>ID</th>";
             echo "<th>IMAGE</th>";
             echo "<th>STOCK NAME</th>";
             echo " <th>QUANTITY</th>";
             echo "<th>CATEGORY</th>";
             echo "<th>DESCRIPTION</th>";
             echo "<th>ACTION</th>";
             echo "<th>ACTION</th>";
             echo " </tr>";
             echo " </thead>";
         
             echo "<tbody>";
         
     while($row=mysqli_fetch_assoc($stock_result)){
        $stockID = $row['stockID'];
        $image = $row['image'];
        $foodname = $row['StockName'];
        $quantity = $row['StockQuantity'];
        $category = $row['StockCat'];
        $time = $row['Date'];
        $description = $row['Description'];
        

        echo "<tr>";
         echo "<td><input type='checkbox' class='checkBoxes' name='checkboxArray[]' value='$stockID'></td>";
        echo "<td> $stockID </td>";
        echo "<td><img width='80' src='upload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$category</td>";
        echo "<td>$description</td>";
         echo "<td><a href='interface.php?source=edit_stock&editID={$stockID}' class='btn btn-success'>Update</a></td>";
        echo "<td><a href='interface.php?source=viewstock&deleteID={$stockID}' class='btn btn-danger' onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
         echo "</tr>";
         
         }
       
        
                     
     }
         
         echo "</tbody>";
         echo "</table>";
         echo "</form>";
         mysqli_free_result($stock_result);
       
         
 }else {
         echo "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h4 class='text-center'>No records found</h4></b>;
                </div>";
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
   

