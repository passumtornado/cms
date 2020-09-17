<?php 
$message ="";
if(isset($_GET['editID'])){
    
     $edit_stock = $_GET['editID'];
}
 $query= "SELECT * FROM stock WHERE stockID= '$edit_stock' ";
 $result = mysqli_query($db,$query);

 while($row=mysqli_fetch_assoc($result)){
        $stockID = $row['stockID'];
        $image = $row['image'];
        $foodname = $row['StockName'];
        $quantity = $row['StockQuantity'];
        $category = $row['StockCat'];
        $time = $row['Date'];
        $description = $row['Description'];
    }
if(isset($_POST['update_stock'])){
   
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
   $upload_image = $_FILES['image']['name'];
   $upload_image_temp = $_FILES['image']['tmp_name'];
    $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
    
    $query_update = "UPDATE stock SET StockQuantity='$quantity',Description='$description',
                    image='$upload_image' WHERE stockID = '$edit_stock' ";
    $query_result = mysqli_query($db,$query_update);
    
     if(! $query_result ){
         
        $message ="<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h3 class='text-center'>could not updated</h3></b>
                </div>
                ";
    }
        
    else{
         echo"<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h3 class='text-center'>successfully updated</h3></b>
                </div>";
        
    }
        
   
   
}else{
    $message = "";
}
?>
<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <form action=" " method="post" enctype="multipart/form-data">
                 
                <div class="col-lg-6 col-md-6">
                   <h2 class="page-header" style="text-align:center;"> UPDATE STOCK</h2>
                    <div  class="">
                       
                    <?php echo $message; ?>
                    </div>
                    
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-check-circle" aria-hidden="true"></i> </span>
                        <input type="text" name="quantity" value="<?php echo $quantity;?>"  class="form-control"aria-describedby="sizing-addon1" placeholder="Quantity"  required>
                    </div>
                     <div class="input-group input-group-lg">
                         <img  width="80" src="upload/<?php  echo $image?>" alt=""><br />
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <div class="input-group input-group-lg">
                       <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"><?php echo $description;?></textarea>
                    </div>
                
                   
                    <button type="submit" class="btn btn-primary" name="update_stock"><span class="glyphicon glyphicon-log-in"></span>Update</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>
