$(document).ready(function(){
    
    $("body").delegate(".print","click",function(event){
         event.preventDefault();
         var pid = $(this).attr('p_id');
         $.ajax({
             url:"print.php",
             method:"POST",
             data: {print_menu:1,print_id:pid},
             success: function(data){
                
                $("#myprint_show").html(data); 
                 
          }
             
         })
        
})

 $.datepicker.setDefaults({
  dateFormat:'yy-mm-dd'
  })
  $(function(){
    $("#from_date").datepicker();
    $("#to_date").datepicker();
  });
  $("#filter").click(function(){
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();
    if(from_date !="" && to_date !=""){
           $.ajax({
            url:"filter.php",
            method:"POST",
            data:{from_date:from_date,to_date:to_date},
            success:function(data){
                
                $("#order_table").html(data)
            }
           });
    }else{
        alert("please select date")
    }
  });
   
});