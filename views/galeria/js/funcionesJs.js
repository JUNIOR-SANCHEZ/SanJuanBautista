/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function(){
    function filePreview(input){
     if(input.files && input.files[0]){
         var reader = new FileReader();
         
         reader.onload = function(e){
             $("#contenedorImg").html('');
             $("#contenedorImg").html('<center><img class="text-center" src="'+e.target.result+'"  style="width:100%;height:195px; border-radius:5px; padding-top:5px;"  class="img-thumbnail"></center>');
         };
         reader.readAsDataURL(input.files[0]);
     }   
    }
    $("#my-file-selector").change(function(){
        filePreview(this);
    }); 
})();