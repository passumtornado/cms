<?php 

 $b_query= "SELECT * FROM breakfast";
 $l_query= "SELECT * FROM lunch";
 $s_query= "SELECT * FROM supper";

 $b_result = mysqli_query($db,$b_query);
 $l_results = mysqli_query($db,$l_query);
 $s_results = mysqli_query($db,$s_query);  
 if($b_result && $l_results &&$s_results){
     
     
     if(mysqli_num_rows($b_result)>0 || mysqli_num_rows($l_results)>0 || mysqli_num_rows($s_results)>0){
         echo "<div class='btn-group'>";
         echo "<button class ='btn btn-primary'><a href='interface.php?source=viewbreakfast&view_breakfast.php'>view breakfast</a></button>";
         echo "<button class ='btn btn-danger'><a href='interface.php?source=viewlunch&view_lunch.php'> view Lunch</a></button>";
         echo "<button class ='btn btn-success'><a href='interface.php?source=viewsupper&view_supper.php'>view supper</a></button>";
          echo "</div>";
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
        echo "<td><img width='90' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$category</td>";
         echo "</tr>";
          
              
       
     }
         
        while($row=mysqli_fetch_assoc($l_results)){
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
        echo "<td><img width='80' src='cookUpload/$image' alt='pass'class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$category</td>";
         echo "</tr>";
          
              
       
     }
          while($row=mysqli_fetch_assoc($s_results)){
        $sID = $row['sID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['categories'];
        $time = $row['date'];
        $description = $row['description'];
        

        echo "<tr>";
        echo "<td>$sID</td>";
        echo "<td><img width='80' height='80' src='cookUpload/$image' alt='pass' class='img img-thumbnail'></td>";
        echo "<td> $foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$category</td>";
         echo "</tr>";
          
              
       
     }
         echo "</tbody>";
         echo "</table>";
         mysqli_free_result($b_result);
         mysqli_free_result($l_results);
         mysqli_free_result($s_results);
 }else {
         echo "<script>alert('no record matching')</script>";
     }
 }else{
     die ('query failed').mysqli_error($db);
 }
?>

<script>
 $(document).ready(function(){
     $("#mytab thead:even")
         .css({"background-color":"green"})
         .css({"color":"white"});
        $("table").css({"margin-top":"10px"});
     
     $(".btn-group a")
         .css({"color":"white"})
         .css({"text-decoration":"none"});
         
    
 });

</script>   
   
        
        
       
        
        
        
       
   
   

   