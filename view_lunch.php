<?php 
$l_query= "SELECT * FROM lunch";



 $l_result = mysqli_query($db,$l_query);
 
 if($l_result){
     
     
     if(mysqli_num_rows($l_result)>0){
         
            echo "<table class='table table-bordered table-hover' id='mytab' >";
             echo "<thead >";
             echo " <tr>";
             echo "<td>ID</td>";
             echo "<td>IMAGE</td>";
             echo "<td>FOOD NAME</td>";
             echo " <td>QUANTITY</td>";
             echo "<td>PRICE</td>";
             echo "<td>CATEGORY</td>";
             echo " </tr>";
             echo " </thead>";
         
             echo "<tbody>";
         
     while($row=mysqli_fetch_assoc($l_result)){
        $lID = $row['LID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['categories'];
        $time = $row['date'];
        $description = $row['description'];
        

        echo "<tr>";
        echo "<td>$lID</td>";
        echo "<td><img width='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$category</td>";
        echo "<td><a href='interface.php?source=edit_lunch&editID={$lID}' class='btn btn-success'>Update</a></td>";
        echo "<td><a href='interface.php?source=viewlunch&deleteID={$lID}' class='btn btn-danger' onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
         echo "</tr>";
                     
     }
         
         echo "</tbody>";
         echo "</table>";
         mysqli_free_result($l_result);
       
         
 }else {
         echo "<script>alert('no record matching')</script>";
     }
 }else{
     die ('query failed').mysqli_error($db);
 }

if(isset($_GET['deleteID'])){
    
    $lunch_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM lunch WHERE lID = $lunch_delete";
    $delete_result = mysqli_query($db,$delete_query); 
    echo "<script>alert('you have successfully deleted')</script>" ;
}

?>
<script>
 $(document).ready(function(){
     $("#mytab thead:even")
         .css({"background-color":"blue"})
         .css({"color":"white"});
        $("table").css({"margin-top":"5px"});
    
    
 });
    
    
    
   

</script>   
   
         