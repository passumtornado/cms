
<?php 
//if(isset($_GET['editID'])){
    //$print = $_GET['editID'];
include "includes/db.php";

if(isset($_POST['print_menu'])){
    $printid = $_POST['print_id'];
    
    $query = "SELECT * FROM sales WHERE salesID = '$printid'";
$result = mysqli_query($db,$query);
if($result){
    if(mysqli_num_rows($result)>0){
        while($row =mysqli_fetch_assoc($result)){
            
        $salesID = $row['salesID'];
        $oID = $row['orderID'];
        $c_ID = $row['c_ID'];
        $m_ID = $row['m_ID'];
        $foodname = $row['foodName'];
        $quantity = $row['quantity'];
        $price = $row['price'];
        $t_ID = $row['tx_ID'];
        $address = $row['address'];
        $date = $row['date'];
            
        $query = "SELECT * FROM customer WHERE customerID = '$c_ID'";
            $result = mysqli_query($db,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $customername = $row['username'];
            }
        }
        
        
        echo '<div class="receipt" id="DivToprint">
    <form method="post" action="">
<div class="row">
     <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
        <div class="col-md-5">
            <img src="images/LOGO.jpg" alt="mbp" style="width:50%">
        <p></p>
       
        <table>
            <tr><td><b>MBPCanteen</b></td></tr>
            <tr><td>Location:</td><td><b>UENR fiapre-sunyani</b></td></tr>
            <tr><td>Phone:</td><td><b>+2332413314</b></td></tr>
            </table>
            
            </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            
            <h2>RECIEPT</h2>
         <table>
            
            <tr><td>DATE</td><td><b> '.$date.'</b></td></tr>
            <tr><td>Recipt NO.</td><td><b> '.$salesID.'</b></td></tr>
             <tr><td>Transaction ID.</td><td><b>'.$t_ID.'</b></td></tr>
            </table>
            </div>
        </div>
      <div class="row">
    
    <div class="col-md-12">
         <table class="table table-striped table-bordered">
           
             <thead>
             <tr>
                 <th>OrderID</th>
                 <th>Food Name</th>
                  <th>Quantity</th>
                  <th>Price in Cedis</th>
                 
                 </tr>
             </thead>
             <tbody>
                 <tr>
                 <td> '.$oID.'</td>
                 <td>  '.$foodname.'</td>
                 <td> '.$quantity.'</td>
                 <td>  '.$price.'</td>
                 
                 </tr>
            </tbody>
            <tfoot>
              <tr>
               <td></td>
                <td></td>
                 <td></td>
                 <td> Total Price:'.$price * $quantity.'</td>
              </tr>
            </tfoot>
        
        </table>
        <p>Customer Name: '.$customername.'</p>
        <p>Customer Address: '.$address.'</p>      
       <button class="btn btn-primary btn-lg" onclick="jQuery("#DivToprint").print()">
                Print 
                </button>
        </div>
    </div>
    
    </div>
   
    <div class="col-md-1"></div>
    
    </div>
</form>
</div>';
    }
}
}


?>

