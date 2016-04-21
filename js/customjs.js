$(document).ready(function(){
    $("#area").keydown(function(e){
        
         if(e.which == '13') {
    
    var data=$("#area").val();
   $.post('submit.php',{message:'insert',data:data});
   $("#area").val("");
    } 
    });
    
   function fetch(){
       $.post('submit.php',{message:'fetch'},function(data){
          $(".messages").html(data);
       });
   }
   
   setInterval(function(){fetch();},2000);
});