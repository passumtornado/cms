<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                
                                <?php 
                                  $query = "SELECT * FROM COOK";
                                  $result = mysqli_query($db, $query );
                                  $count_cook = mysqli_num_rows( $result);
                                  echo " <div class='huge'>$count_cook</div>";
                                ?>
                               
                                <div>COOKS</div>
                            </div>
                        </div>
                    </div>
                    <a href="Admin_interface.php?source=view_all_cook">
                        <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                 <?php 
                                  $query = "SELECT * FROM waiter";
                                  $result = mysqli_query($db, $query );
                                  $count_waiter = mysqli_num_rows( $result);
                                  echo " <div class='huge'>$count_waiter</div>";
                                ?>
                               
                    
                                <div>WAITERS</div>
                            </div>
                        </div>
                    </div>
                 <a href="Admin_interface.php?source=view_all_waiter">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                 <?php 
                                  $query = "SELECT * FROM customer_order";
                                  $result = mysqli_query($db, $query );
                                  $count_orders = mysqli_num_rows( $result);
                                  echo " <div class='huge'>$count_orders</div>";
                                ?>
                               
                                <div class="huge"></div>
                                <div> Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="Admin_interface.php?source=orders">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php 
                                  $query = "SELECT * FROM customer";
                                  $result = mysqli_query($db, $query );
                                  $count_customers = mysqli_num_rows( $result);
                                  echo " <div class='huge'>$count_customers</div>";
                                ?>
                                <div>Customers</div>
                            </div>
                        </div>
                    </div>
                    <a href="Admin_interface.php?source=customer">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2"></div>
     <div class="col-md-8">
    
     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            <?php 
            
            $element_text = ['Cooks','Customers','waiters','orders'];
            $element_count =[$count_cook,$count_customers,$count_waiter,$count_orders];
            
            for($i=0; $i< 4; $i++){
                
                echo "['{$element_text[$i]}'". "," . "{$element_count[$i]}],";
            }
            
            ?>
         
        ]);

        var options = {
          chart: {
            title: 'Review Bar Chart',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
    
    </div>
     <div class="col-md-2"></div>

</div>
 