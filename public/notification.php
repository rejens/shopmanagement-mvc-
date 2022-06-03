<?php
// include "connection.php";
$conn = new mysqli("localhost", "root", "", "shop_management");
$today = date('Y-m-d');
$addDays = date('Y-m-d', strtotime($today . '+30 days'));
$sql = "select name from items where expiry_date<='$addDays' and expiry_date != '0000-00-00'";


$result = $conn->query($sql);
header("Content-type:application/json");

$arr = $result->fetch_all(MYSQLI_ASSOC);
echo (json_encode($arr));


// $array = [];

// foreach ($result as $row) {
//     array_push($array, $row);
// }

// header("Content-type:application/json");
// echo (json_encode($array) . "<br>" . json_encode($arr));
