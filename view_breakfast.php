<?php 
$b_query= "SELECT * FROM breakfast";



 $b_result = mysqli_query($db,$b_query);
 
 if($b_result){
     
     
     if(mysqli_num_rows($b_result)>0){
         
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
         
     while($row=mysqli_fetch_assoc($b_result)){
        $bID = $row['bID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['categories'];
        $time = $row['date'];
        $description = $row['description'];
        

        echo "<tr>";
        echo "<td>$bID</td>";
        echo "<td><img width='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$category</td>";
        echo "<td><a href='interface.php?source=edit_breakfast&editID={$bID}' class='btn btn-success'>Update</a></td>";
        echo "<td><a href='interface.php?source=viewbreakfast&deleteID={$bID}' class='btn btn-danger' onclick=\"return confirm('delete this record?')\"> Delete</a></td>"; 
        echo "</tr>";
         echo "</tr>";
                     
     }
         
         echo "</tbody>";
         echo "</table>";
         mysqli_free_result($b_result);
       
         
 }else {
         echo "<script>alert('no record matching')</script>";
     }
 }else{
     die ('query failed').mysqli_error($db);
 }

if(isset($_GET['deleteID'])){
    
    $break_delete = $_GET['deleteID'];
    $delete_query= "DELETE FROM breakfast WHERE bID = $break_delete";
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
   
         