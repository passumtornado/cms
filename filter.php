<?php 
include "includes/db.php";
if(isset($_POST['from_date'],$_POST['to_date'])){
    $output = '';
	$query="SELECT * FROM sales WHERE date BETWEEN '".$_POST['from_date']."' AND '".$_POST['to_date']."'";
	$result = mysqli_query($db,$query);

	
	 $output .=' <table id="menu_data" class="table table-striped table-bordered">
    
   <thead>
        <tr>
        
             <th>ID</th>
             <th>food Name</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Address</th>
             <th>Transaction ID</th>
             <th>customer</th>
            
        </tr>
        
        </thead>
        ';
         if(mysqli_num_rows($result)>0){
         	 while($row = mysqli_fetch_array($result)){
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
        
          $sql = "SELECT * FROM customer WHERE customerID='$c_ID'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $username = $row["username"];
         
       }
         
        
            
        $output.= "<tr>
     
        <td> $salesID </td>
        <td>$foodname</td>
        <td>$quantity</td>
        <td>$price</td>
        <td>$address</td>
        <td>$t_ID</td>
        <td>$username</td>
        
          </tr>";
        }

      }
       else{
        	$output .="

             <tr>
              <td>NO SALE FOUND</td>
             </tr>
        	";
        }
        
  $output .=' </table>';
   echo $output;
	
}

?>