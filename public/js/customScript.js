'use strict';

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
    });
    

// modal work
        $(".addButton").click(function() {
            $("#addModal").modal("show")
        })
        $(".editButton").click(function() {
            $("#editModal").modal("show")
        })

        $(".deleteButton").click(function() {
            $("#deleteModal").modal("show")
        })

        $(".stockButton").click(function() {
            $("#stockModal").modal("show")
        })

        $(".soldButton").click(function() {
            $("#soldModal").modal("show")
        })

        //prevents dropdown close on navigation dropdown
        $(".settings-dropdown").on("click", function(event) {
            // event.preventDefault();
            event.stopPropagation();
        })

        //delete modal
        function getId(id) {
            document.cookie = "id=" + id;
        }
        //notification control
    function notification(noti){
        alert("check")
        $(".notificationCenter").html(noti)
    }
        
//time stamp
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
console.log(date);
console.log("object");




