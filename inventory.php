
<?php 
$message ="";

if(isset($_POST['add_stock'])){
    
    $stockName = $_POST['product'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
   $upload_image = $_FILES['image']['name'];
   $upload_image_temp = $_FILES['image']['tmp_name'];
    
     $query_select = "SELECT * FROM stock WHERE StockName = '$stockName' AND StockCat = '$category'";
     $select_result = mysqli_query($db,$query_select);
     if($select_result){
         $count = mysqli_num_rows($select_result);
         if($count > 0){
             $message = "
                         <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p>stock already exist!!!</p></b>
                </div>
             
                        ";
         }else{
             
        $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
    if($send){
       
        $query_stock = "INSERT INTO stock (stockName,stockCat,stockQuantity,image,Description) VALUES ('$stockName','$category','$quantity','$upload_image','$description')";
        $stock_result = mysqli_query($db,$query_stock);
        if($stock_result){
            $message = "
            
                 <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p>stock successfully added!!!</p></b>
                </div>
            ";
        }else{
            $message = "
            
                 <div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p>failed to add!!!</p></b>
                </div>
            ";
        }
    }
         }
     }
    
   
 
    
    
}

$myproduct = array('Select Products','Flour','Maize','Tin tomatoes','Rice','Milk','Beans','Sugar','Orange','Fanta','coke cola','Beef','sardines','mutton','chicken','fish');

$categories = array('Select categories','Cereals','SoftDrinks','Beverages','Alcoholic drinks','fruits','Meat','vegetables','others');




?>



<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <form action=" " method="post" enctype="multipart/form-data">
                 
                <div class="col-lg-6 col-md-6">
                   <h2 class="page-header" style="text-align:center;"> ADD STOCK</h2>
                    <div  class="">
                       
                    <?php echo $message; ?>
                    </div>
                    <div class="input-group input-group-lg">
                       <?php echo "<select name ='product' id='selectoption' class='form-control'>";
                           
                            foreach($myproduct as $values){
                                echo "<option value=\"$values\">$values</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>
                     <div class="input-group input-group-lg">
                       <?php echo "<select name ='category' id='selectoption' class='form-control'>";
                           
                            foreach($categories as $cate){
                                echo "<option value=\"$cate\">$cate</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>
                    
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-check-circle" aria-hidden="true"></i> </span>
                        <input type="text" name="quantity" class="form-control"aria-describedby="sizing-addon1" placeholder="Quantity"  required>
                    </div>
                     <div class="input-group input-group-lg">
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <div class="input-group input-group-lg">
                       <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                
                   
                    <button type="submit" class="btn btn-primary" name="add_stock"><span class="glyphicon glyphicon-log-in"></span> Add</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>
