<?php

$conn = new mysqli("localhost", "root", "", "shop_management");
$sql = "select * from items";
$result = $conn->query($sql);
foreach ($result as $rows) {
    print_r($rows);
}
