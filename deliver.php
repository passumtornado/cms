<?php
$query_select = "SELECT * FROM sales ORDER BY date ASC ";
$result = mysqli_query($db,$query_select);

?>
<p><br/></p>
<p><br/></p>
<div class="container">
<div class= "table-responsive">
    
    <table id="menu_data" class="table table-striped table-bordered">
    
    <thead>
        <tr>
        
             <th>ID</th>
             <th>food Name</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Address</th>
             <th>Transaction ID</th>
             <th>Date &amp; time</th>
             <th>customer</th>
             <th>Action</th>
        </tr>
        
        </thead>
        <?php 
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
            
        echo "<tr>";
     
        echo "<td> $salesID </td>";
        echo "<td>$foodname</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "<td>$address</td>";
        echo "<td>$t_ID</td>";
        echo "<td>$date</td>";
        $sql = "SELECT * FROM customer WHERE customerID='$c_ID'";
         $sql_result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_assoc($sql_result)){
             $username = $row['username'];
        echo "<td>$username</td>";
         }
         echo "<td><a href='#' p_id='$salesID' id='' class='btn btn-success print' data-toggle='modal' data-target='#myprint'>print</a></td>
         
         ";
        
          echo "</tr>";
        }
        
        ?>
    
    </table>
    
    </div>
    <div class="modal" id="myprint" tabindex="-1">
    
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            </div>
            <div class="modal-body">
               <div id="myprint_show">
                
                
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
        </div>
    </div>

</div>
    <script type="text/javascript" src="ajax.js"></script>

<script>
$(document).ready(function(){
    $("#menu_data").DataTable();
    
    $('table').on('click','tr',function(){

        var pid = $(this).attr('class');
        switch(pid){
            case 'white';
            $(this).removeClass('white');
            $(this).addClass('red');
            break;
            default:
            $('this').addClass('white');

        }
    })
});

</script>

