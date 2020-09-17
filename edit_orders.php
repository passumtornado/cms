<?php
if(isset($_GET['editID'])){
    
    $edit_orders = $_GET['editID'];
}

$query ="SELECT * FROM customer_order WHERE orderID = '$edit_orders'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0){
    while($row =mysqli_fetch_assoc($result)){
        $oID = $row['orderID'];
        $cID = $row['c_ID'];
        $m_ID = $row['m_ID'];
        $quantity = $row['quantity'];
        $p_status =$row['p_status'];
        $food_status = $row['p_status'];
        $date = $row['date'];
        $tx = $row['t_ID'];
    }
}
$query = "SELECT * FROM menu WHERE m_ID ='$m_ID'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)){
       while( $row=mysqli_fetch_assoc($result)){
        $mID = $row['m_ID'];
       $image = $row['image'];
       $foodname = $row['foodName'];
        $price = $row['amount'];
       }
   }

$query = "SELECT * FROM customer WHERE customerID ='$cID'";
$result = mysqli_query($db,$query);
   if(mysqli_num_rows($result)){
       while( $row=mysqli_fetch_assoc($result)){
        $customerID = $row['customerID'];
        $username = $row['username'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address1'];
       }
   }
   
 $query = "INSERT INTO sales(orderID,c_ID,m_ID,foodName,quantity,price,address,tx_ID)VALUES('$oID','$cID','$m_ID','$foodname','$quantity','$price','$address','$tx')";
 $result = mysqli_query($db,$query);
 if($result){
     
     $query = "DELETE  FROM customer_order WHERE orderID = '$edit_orders'";
     $result_delete = mysqli_query($db,$query);
      echo "<div class='alert alert-primary'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='colse'>&times;</a>
                            <b><h3 class='text-center'>food submitted</h3></b>
                </div>";
 }
else {
    echo "query failed".mysqli_connect_errno();
}

    ?>