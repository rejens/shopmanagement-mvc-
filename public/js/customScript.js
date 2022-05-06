// $('document').ready(function() {

//     $(".side-nav").hover(function(){$(".side-nav").css("background","blue")},
//     function(){$(".side-nav").css("background","white")})
// });

$(document).ready(function(){
            
                    
        //notification funciton
        var down = false;
        
        $('#bell').click(function(e){
        
            var color = $(this).text();
            if(down){
                
                $('#box').css('height','0px');
                $('#box').css('opacity','0');
                down = false;
            }else{
                
                $('#box').css('height','auto');
                $('#box').css('opacity','1');
                down = true;
                
            }
            
        });

//tooltip function
          $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
            
            });