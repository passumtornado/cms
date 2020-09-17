<?php 

if(isset($_POST['add_cat'])){
    $cat_name = $_POST['category'];
    
    $query_select = "SELECT * FROM categories WHERE categoryName = '$cat_name' ";
    $query_result = mysqli_query($db,$query_select);
     if($query_result){
            $cate = mysqli_num_rows($query_result);
            if($cate > 0){
                echo  "
                        <div i class='alert alert-warning'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <h4 class='text-center'  ><b>category alredy exist</b></h4>
                    </div>
                ";
            }
            else{
    
    $query_cat = "INSERT INTO categories (categoryName)VALUES('$cat_name')";
    $result_cat = mysqli_query($db,$query_cat);
    if($result_cat){
        echo " <div i class='alert alert-warning'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <h4 class='text-center'  ><b>you have successfully added new category</b></h4>
                    </div>";
    }else{
        echo "<div i class='alert alert-warning'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <h4 class='text-center'  ><b>query failed!!!</b></h4>
                    </div>";
    }
}
     }
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
                        <input type="text" name="category" class="form-control"aria-describedby="sizing-addon1" placeholder="add category"  required>
                    </div>
                    
                   
                    <button type="submit" id="addcat" class="btn btn-primary" name="add_cat"><span class="glyphicon glyphicon-log-in"></span> Add category</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>