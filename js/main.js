$(document).ready(function(){
    
    $('#selectAll').click(function(eveny){
        
       if(this.checked){
            $('.checkBoxes').each(function(){
                this.checked = true;
            });
           
        }else{
            $('.checkBoxes').each(function(){
                this.checked = false;
            });
        }
    })
    
});