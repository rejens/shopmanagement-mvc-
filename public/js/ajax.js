const URLROOT="http://localhost/4thsem/advance_php/anotherMVC/";


//inventory work

//when search is not engaged
$.ajax({
    type: "get",
    url:  URLROOT+"api/inventory.php",
    dataType: "json",
    success: function (response) {
        let data=`` 
        for(i of response){
            data +=`<tr>  <td> ${i['name']}  </td> <td> ${i['cp']}  </td> <td> ${i['sp']}  </td> <td> ${i['quantity']}  </td> <td>  <div class='me-auto'>
                            <button type='button' class='btn btn-primary editButton' data-toggle='tooltip' data-placement='top' title='edit' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-pen-to-square'></i></button>
                            <button type='button' class='btn btn-danger deleteButton' data-toggle='tooltip' data-placement='top' title='delete' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-trash'></i> </button>
                            <button type='button' class='btn btn-success soldButton' data-toggle='tooltip' data-placement='top' title='sale' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-check'></i></button>
                        </div></td> </tr> `;
        }
        $("#inventory-table").html(data);
        
    }
});

//when search is engaged
$("#searchItem").on("keyup",function(){
$.ajax({
    type: "get",
    url:  URLROOT+"api/inventory.php?searchItem="+$("#searchItem").val(),
    dataType: "json",
    success: function (response) {
        let data=`` 
        for(i of response){
            data +=`<tr>  <td> ${i['name']}  </td> <td> ${i['cp']}  </td> <td> ${i['sp']}  </td> <td> ${i['quantity']}  </td> <td>  <div class='me-auto'>
                            <button type='button' class='btn btn-primary editButton' data-toggle='tooltip' data-placement='top' title='edit' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-pen-to-square'></i></button>
                            <button type='button' class='btn btn-danger deleteButton' data-toggle='tooltip' data-placement='top' title='delete' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-trash'></i> </button>
                            <button type='button' class='btn btn-success soldButton' data-toggle='tooltip' data-placement='top' title='sale' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-check'></i></button>
                        </div></td> </tr> `;
        }
        $("#inventory-table").html(data);
        
    }
});
})


//notification
$.ajax({
    type: "POST",
    dataType:"json",
    url: URLROOT+"api/notification.php",
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

//sales transactions
$.ajax({
    type: "post",
    url: URLROOT+"api/salesTransaction.php",
    dataType: "json",
    success: function (response) {
        data=``;
        for(i of response){
            data+=`<tr><td>  ${i['datee']} </td>
            <td> ${i['name']} </td> 
            <td> ${i['quantity']} </td>
            <td> ${i['pl']} </td> 
            <td> ${i['salesAmt']} </td> </tr>`
        }
                $("#salesTransaction-table").html(data);

    }
});



// if(document.querySelector(""))

//buying transactions


    //     const from =
    
// $.ajax({
//     type: "get",
//     url: URLROOT+"api/buyingTransaction.php?from=&to=",
//     dataType: "json",
//     success: function (response) {
//         console.log(response);
//         data=``;
//         for(i of response){
//             data+=`<tr><td>  ${i['datee']} </td>
//             <td> ${i['name']} </td> 
//             <td> ${i['quantity']} </td>
//             <td> ${i['price']} </td> 
//             <td> ${i['vendor']} </td> </tr>`;
//         }
//         $("#buyingTransaction-table").html(data);
//     }
// });
// })


$.ajax({
    url: URLROOT+"api/buyingTransaction.php",
    dataType: "json",
    success: function (response) {
        data=``;
        for(i of response){
            data+=`<tr><td>  ${i['datee']} </td>
            <td> ${i['name']} </td> 
            <td> ${i['quantity']} </td>
            <td> ${i['price']} </td> 
            <td> ${i['vendor']} </td> </tr>`;
        }
        $("#buyingTransaction-table").html(data);
    }
});

//  <?php

//             foreach ($this->result as $row) {
//                 echo " 
// <tr>
// <td>" . $row['datee'] . "</td>
// <td>" . $row['name'] . "</td> 
// <td>" . $row['quantity'] . "</td>
// <td>" . $row['price'] . "</td> 
// <td>" . $row['vendor'] . "</td> 
// </tr>
// ";
//             }
//             ?>



// ";
//             }
//             ?>