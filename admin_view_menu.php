

<?php
$query_select = "SELECT * FROM menu ORDER BY category_ID ASC ";
$result = mysqli_query($db,$query_select);

?>
<div class="container">
<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>IMAGE</th>
             <th>FOOD NAME</th>
             <th>PRICE</th>
             <th>CATEGORY</th> 
        </tr>
        
        </thead>
        <?php 
        while($row = mysqli_fetch_array($result)){
        $mID = $row['m_ID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['category_ID'];
        $time = $row['date'];
        $description = $row['description'];
        

        echo "<tr>";
     
        echo "<td>$mID</td>";
        echo "<td><img width='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$price</td>";
         $sql = "SELECT * FROM categories WHERE CID='$category'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $cat_id = $row['CID'];
             $cat_name = $row['categoryName'];
              echo "<td>$cat_name</td>";
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

