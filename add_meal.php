<?php 
$message = "";
if(isset($_POST['add_food'])){
    
    $foodname = $_POST['foodname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];
    $foodtags = $_POST['foodtags'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];
    
     
        $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
    
        if($send){
            $query_menu = "INSERT INTO menu(foodName,category_ID,quantity,amount,description,foodtags,image)VALUES('$foodname',' $categories','$quantity','$price',' $description','$foodtags', '$upload_image')";
            $result_breakfast = mysqli_query($db,$query_menu );
            
            if(!$result_breakfast ){
                
                $message = "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p>could not insert meal</p></b>;
                </div>
                
                ";
            }
            else{
                $message = "<div class='alert alert-warning'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><p> Food successfully added</p></b>;
                </div>";
            }
        }else{
             $message = "couldn't upload image";
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
                   <h3 class="page-header" style="text-align:center;"> ADD FOOD </h3>
                    <div  class="">
                       
                    <?php echo $message; ?>
                    </div>
                     
                     <div class="input-group input-group-lg">
                       <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i> </span>
                        <input type="text" name="foodname" class="form-control"aria-describedby="sizing-addon1" placeholder="Food Name"  required>
                    </div>
                    
                   
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-check-circle" aria-hidden="true"></i> </span>
                        <input type="text" name="quantity" class="form-control"aria-describedby="sizing-addon1" placeholder="Quantity"  required>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                        <input type="number" step="0.01" name="price" class="form-control"aria-describedby="sizing-addon1" placeholder="Food price"  required>
                    </div>
                    
                     <div class="input-group input-group-lg">
                         
                        
                       <select name="categories" class="form-control">
                           <option>Select Category</option>
                            <option value="1">Breakfast</option>
                            <option value="2">Lunch</option>
                            <option value="3">Supper</option>
                            <option value="4">Combo</option>
                           
                          <?php 
                            /* $query_select = "SELECT * FROM categories";
                             $result_select = mysqli_query($db,$query_select);
                                 if(mysqli_num_rows($result_select) > 0){
                                     while($row = mysqli_fetch_array($result_select)){
                                         $cID= $row['CID'];
                                         $Cate_name = $row['categoryName'];
                                         echo "<option value='$cID'>{$cate_name}</option>";
                                     }
                                 }*/
            
                         ?> 
                         </select>   
                    </div>
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-cogs" aria-hidden="true"></i> </span>
                        <input type="text" step="0.01" name="foodtags" class="form-control"aria-describedby="sizing-addon1" placeholder="Enter keyword"  required>
                    </div>
                     <div class="input-group input-group-lg">
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <div class="input-group input-group-lg">
                       <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                
                   
                    <button type="submit" id="addfood" class="btn btn-primary" name="add_food"><span class="glyphicon glyphicon-log-in"></span> Add</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>