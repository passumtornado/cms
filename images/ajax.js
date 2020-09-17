$(document).ready(function(){
    
    $("body").delegate("#print","click",function(event){
         event.preventDefault();
         var pid = $(this).attr('p_id');
         $.ajax({
             url:"print.php",
             method:"POST",
             data: {print_menu:1,print_id:pid},
             success: function(data){
                 alert('data');
               // $("#get_myfood").html(data); 
                 
          }
             
         })
        
})
    
});