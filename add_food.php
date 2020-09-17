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
    
     
    if($categories=="breakfast"){
        $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
    
        if($send){
            $query_breakfast = "INSERT INTO breakfast(foodname,categories,quantity,amount,description,foodtags,image)VALUES('$foodname',' $categories','$quantity','$price',' $description','$foodtags', '$upload_image')";
            $result_breakfast = mysqli_query($db,$query_breakfast );
            
            if(!$result_breakfast ){
                $message = "query failed";
            }
            else{
                $message = "food added";
            }
        }else{
             $message = "couldn't upload image";
        }
    }else if($categories=="lunch"){
             $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
            if($send){
            $query_lunch = "INSERT INTO lunch(foodname,categories,quantity,amount,description,foodtags,image)VALUES('$foodname',' $categories','$quantity','$price',' $description','$foodtags' ,'$upload_image')";
            $result_lunch = mysqli_query($db,$query_lunch );
            
            if(!$result_lunch ){
                $message = "query failed";
            }
            else{
                $message = "food added";
            }
        }else{
             $message = "couldn't upload image";
        }
        
    }else {
         $send = move_uploaded_file($upload_image_temp,"cookUpload/".$upload_image);
        if($send){
            $query_supper = "INSERT INTO supper(foodname,categories,quantity,amount,description,foodtags,image)VALUES('$foodname','$categories','$quantity','$price',' $description','$foodtags', '$upload_image')";
            $result_supper = mysqli_query($db,$query_supper );
            
            if(!$result_supper ){
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
                   <h3 class="page-header" style="text-align:center;"> ADD FOOD </h3>
                    <div id="myalert" class="alert alert-success collapse">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <h4 class="text-center"  ><?php echo $message; ?></h4>
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
                       <label>Categories</label>
                        <select class="form-control" name="categories">
                            <option value="select">select option</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="lunch">lunch</option>
                            <option value="supper">Supper</option>
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
<script>
$(document).ready(function(){
    
    $("#addfood").click(function(){
        
        $('#myalert').show('fade');
        
    })
});
</script>