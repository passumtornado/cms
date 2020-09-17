<?php 
$message = "";
if(isset($_POST['add_table'])){
    
    $tabletag = $_POST['tabletag'];
    $status = $_POST['tablestatus'];

        
        $sql = "INSERT INTO customer_table(Tabletag,tablestatus,c_ID)VALUES('$tabletag','$status','0')";
        $result = mysqli_query($db,$sql);
        if($result){
            $message = "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h3 class='text-center'>table added</h3></b>
                </div>";
        }else{
             $message = "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h3 class='text-center'>could not add table</h3></b>
                </div>";
        }
}

?>




<div class="signin" id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <form action=" " method="post">
                 
                <div class="col-lg-6 col-md-6">
                   <h3 class="page-header" style="text-align:center;"> ADD TABLES </h3>
                    <div  class="">
                       
                    <?php echo $message; ?>
                    </div>
                     
                  
                  
                     <div class="form-group" style="width:100%;">
                         
                        
                       <select name="tabletag" class="form-control">
                           <option>Select TableTag</option>
                            <option value="table 1">Table 1</option>
                            <option value="table 2">Table 2</option>
                            <option value="table 3">Table 3</option>
                            <option value="table 4">Table 4</option>
                            <option value="table 5">Table 5</option>
                            <option value="table 6">Table 6</option>
                             <option value="table 4">Table 7</option>
                            <option value="table 5">Table 8</option>
                            <option value="table 6">Table 9</option>
                             <option value="table 6">Table 10</option>
                         </select>   
                    </div>
                    
                    <div class="form-group" style="width:100%;">
                         
                        
                       <select name="tablestatus" class="form-control">
                           <option>Set Table Status</option>
                            <option value="empty">Empty</option>
                           <option value="occupied">Occupied</option>
                           
                         </select>   
                    </div>
                   
                    <button type="submit" style="width:100%;" id="addtable" class="btn btn-primary" name="add_table"><span class="glyphicon glyphicon-arrow-up"></span> Add Table</button>
                </div>
            </form>

            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</div>