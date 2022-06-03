const URLROOT="http://localhost/4thsem/advance_php/anotherMVC/";



$("#searchItem").on("keydown",function(){

    var searchItem= $('#searchItem').val();
    $.ajax({
        type: "post",
        url: "http://localhost/4thsem/advance_php/anotherMVC/pages/inventory/searchitem",
        success: function (response) {
        }
});

console.log("object");
})




//notification
$.ajax({
    type: "POST",
    url: URLROOT+"notification.php",
    success: function (response) {
        var arr="";
        var count=0;

        console.log(response);
    
        $.each(response, function(key, value) {
            arr+="<li class='dropdown-item list-group-item-action list-group-item-light' href='#'>"+value["name"] +" is about to get expired </li>";
            count++;
        })    
        $(".notificationCenter").html(arr);
        $("#notificationBadge").text(count);
        if(count<1){
            $("#notificationBadge").hide();
        }

    }
});


//
$.ajax({
    type: "post",
    url: "http://localhost/4thsem/advance_php/anotherMVC/app/",
    success: function (response) {
        
    }
});