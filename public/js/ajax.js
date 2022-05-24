$("#searchItem").on("keydown",function(){

    var searchItem= $('#searchItem').val();
    $.ajax({
        type: "post",
        url: "http://localhost/4thsem/advance_php/anotherMVC/search.php",
        data: {
            searchItem:searchItem
        },
        success: function (response) {
            console.log("response");
        }
});
})

var data="data"
$.ajax({
    type: "POST",
    url: "http://localhost/4thsem/advance_php/anotherMVC/notification.php",
    data: {
        data:data
    },
    success: function (response) {
        var arr="";
        var count=0;
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



