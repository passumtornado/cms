<?php 


           
$stock_query= "SELECT * FROM stock ORDER BY stockName ASC ";



 $stock_result = mysqli_query($db,$stock_query);
 
 if($stock_result){
     
     
     if(mysqli_num_rows($stock_result)>0){
         
            echo "<table class='table table-bordered table-hover' id='mytab' >";
            
             echo "<p><br /></p>";
              echo "<p><br /></p>";
             echo "<thead >";
             echo " <tr>";
             echo "<th>ID</th>";
             echo "<th>IMAGE</th>";
             echo "<th>STOCK NAME</th>";
             echo " <th>QUANTITY</th>";
             echo "<th>DESCRIPTION</th>";
             echo "<th>CATEGORY</th>";
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
        echo "<td> $stockID </td>";
        echo "<td><img width='80' src='upload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$category</td>";
        echo "<td>$description</td>"; 
        echo "</tr>";
        
         
         }
       
        
                     
     }
         
         echo "</tbody>";
         echo "</table>";
        
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
   

