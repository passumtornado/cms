<?php 
if(isset($_GET['deleteID'])){
    
    $menu_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM menu WHERE m_ID = $menu_delete";
    $delete_result = mysqli_query($db,$delete_query); 
    echo "
         <div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h4 class='text-center'>meal deleted</h4></b>;
                </div>
    " ;
}


if(isset($_POST['checkboxArray'])){
    $checkbox = $_POST['checkboxArray'];
    foreach($checkbox as $menuValueID){
        $bulk_options = $_POST['bulk_options'];
        
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

echo "<form method='post' action=''>";
           
$b_query= "SELECT * FROM menu ORDER BY category_ID ASC ";



 $b_result = mysqli_query($db,$b_query);
 
 if($b_result){
     
     
     if(mysqli_num_rows($b_result)>0){
         
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
                 <a href='#' class='btn btn-success'>Add New</a>
                 
                 </div>
             ";
             echo "<p><br /></p>";
              echo "<p><br /></p>";
             echo "<thead >";
             echo " <tr>";
             echo "<th><input type='checkbox' id='selectAll'></th>";
             echo "<th>ID</th>";
             echo "<th>IMAGE</th>";
             echo "<th>FOOD NAME</th>";
             echo " <th>QUANTITY</th>";
             echo "<th>PRICE</th>";
             echo "<th>CATEGORY</th>";
             echo "<th>ACTION</th>";
             echo "<th>ACTION</th>";
             echo " </tr>";
             echo " </thead>";
         
             echo "<tbody>";
         
     while($row=mysqli_fetch_assoc($b_result)){
        $mID = $row['m_ID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['category_ID'];
        $time = $row['date'];
        $description = $row['description'];
        

        echo "<tr>";
         echo "<td><input type='checkbox' class='checkBoxes' name='checkboxArray[]' value='$mID'></td>";
        echo "<td>$mID</td>";
        echo "<td><img width='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
         $sql = "SELECT * FROM categories WHERE CID='$category'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $cat_id = $row['CID'];
             $cat_name = $row['categoryName'];
              echo "<td>$cat_name</td>";
         }
       
        echo "<td><a href='interface.php?source=edit_menu&editID={$mID}' class='btn btn-success'>Update</a></td>";
        echo "<td><a href='interface.php?source=viewbreakfast&deleteID={$mID}' class='btn btn-danger' onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
         echo "</tr>";
                     
     }
         
         echo "</tbody>";
         echo "</table>";
         echo "</form>";
         mysqli_free_result($b_result);
       
         
 }else {
         echo "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h4 class='text-center'>No records found</h4></b>;
                </div>";
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
        $("table").css({"margin-top":"5px"});
   
    
 });

</script>   
   