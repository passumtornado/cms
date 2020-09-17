<?php 

if(isset($_GET['editID'])){
    
     $edit_lunch = $_GET['editID'];
}
 $query= "SELECT * FROM lunch WHERE LID= $edit_lunch ";
 $result_lunch = mysqli_query($db,$query);

 while($row=mysqli_fetch_assoc($result_lunch)){
        $lID = $row['LID'];
        $image = $row['image'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['amount'];
        $category =$row['categories'];
        $time = $row['date'];
        $description = $row['description'];
        $foodtags = $row['foodtags'];
    }
if(isset($_POST['update_lunch'])){
    $foodname = $_POST['foodname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $foodtags = $_POST['foodtags'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];
    
    $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
    
    $query_update = "UPDATE lunch SET foodName= '$foodname',quantity='$quantity',amount='$price',description='$description',
                    foodtags='$foodtags',image='$upload_image' WHERE LID = $edit_lunch";
    $query_result = mysqli_query($db,$query_update);
    
     if(! $query_result ){
         
        echo"<script>alert('query Failed')</script>";
    }
        
    else{
         echo"<script>alert('successfully updated')</script>";
        
    }
        
   
   
}else{
    echo"";
}
?>
<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <form action=" " method="post" enctype="multipart/form-data">
                 
                <div class="col-lg-6 col-md-6">
                   <h3 class="page-header" style="text-align:center;"> UPDATE FOOD </h3>
                    
                     <div class="input-group input-group-lg">
                       <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i> </span>
                        <input type="text" name="foodname" value="<?php echo $foodname;?>" class="form-control"aria-describedby="sizing-addon1" placeholder="Food Name"  required>
                    </div>
                    
                   
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-check-circle" aria-hidden="true"></i> </span>
                        <input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control"aria-describedby="sizing-addon1" placeholder="Quantity"  required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                        <input type="number" step="0.01" value="<?php echo $price;?>" name="price" class="form-control"aria-describedby="sizing-addon1" placeholder="Food price"  required>
                    </div>
                     
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-cogs" aria-hidden="true"></i> </span>
                        <input type="text" step="0.01" name="foodtags" value="<?php echo $foodtags;?>" class="form-control"aria-describedby="sizing-addon1" placeholder="Enter keyword"  required>
                    </div>
                     <div class="input-group input-group-lg">
                        <img  width="80" src="cookUpload/<?php  echo $image?>" alt=""><br />
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <div class="input-group input-group-lg">
                       <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"><?php echo $description;?></textarea>
                    </div>
                
                   
                    <button type="submit" id="addfood" class="btn btn-primary" name="update_lunch"><span class="glyphicon glyphicon-log-in"></span> Update</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>

