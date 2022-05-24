<?php

setcookie("new cookie ", "new cookie value");

include "connection.php";
$searchItem = $_POST['searchItem'];
$sql = "select * from items where name=%$searchItem%";
$result = $conn->query($sql);
$arr = [];

foreach ($result as $row) {
    array_push($arr, $row);
}

header("Content-type:application/json");
echo (json_encode($arr));
