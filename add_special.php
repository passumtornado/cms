<?php 
$message = "";
if(isset($_POST['add_special'])){
    
    $foodname = $_POST['foodname'];
    $price = $_POST['price'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];
    $tags = $_POST['tags'];
    $upload_image = $_FILES['image']['name'];
    $upload_image_temp = $_FILES['image']['tmp_name'];
    
    if($categories=="combo"){
         $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
        if($send){
            $query_combo = "INSERT INTO combo(comboName,description,categories,price,tags,image)VALUES('$foodname','$description','$categories','$price','$tags',' $upload_image')";
            $result_combo = mysqli_query($db,$query_combo );
            
            if(!$result_combo ){
                $message = "query failed";
            }
            else{
                $message = "food added";
            }
        }else{
             $message = "couldn't upload image";
        }
        
    }else {
         $send = move_uploaded_file($upload_image_temp,"upload/".$upload_image);
        if($send){
            $query_event = "INSERT INTO event(foodName,description,categories,price,tags,image)VALUES('$foodname',' $description',' $categories','$price','$tags',' $upload_image')";
            $result_event = mysqli_query($db,$query_event );
            
            if(!$result_event ){
                $message = "query failed";
            }
            else{
                $message = "food added";
            }
        }else{
             $message = "couldn't upload image";
        }
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
                   <h3 class="page-header" style="text-align:center;"> ADD SPECIAL PACKAGES</h3>
                     <h4 class="text-center" ><?php echo $message; ?></h4>
                     <div class="input-group input-group-lg">
                       <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i> </span>
                        <input type="text" name="foodname" class="form-control"aria-describedby="sizing-addon1" placeholder="Package Name"  required>
                    </div>
                    
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                        <input type="number" name="price" class="form-control"aria-describedby="sizing-addon1" placeholder="Food price"  required>
                    </div>
                     <div class="input-group input-group-lg">
                       <label>Categories</label>
                        <select class="form-control" name="categories">
                            <option value="select">select option</option>
                            <option value="combo">Combo</option>
                            <option value="event">Event</option>
                        </select>
                    </div>
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                        <input type="text" name="tags" class="form-control"aria-describedby="sizing-addon1" placeholder="Enter Keyword"  required>
                    </div>
                     <div class="input-group input-group-lg">
                        <label>Upload image</label>
                        <input type="file" name="image" id="file" multiple accept="image/*">
                    </div>

                    <div class="input-group input-group-lg">
                       <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                
                   
                    <button type="submit" class="btn btn-primary" name="add_special"><span class="glyphicon glyphicon-log-in"></span> Add</button>
                </div>
            </form>
       <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>