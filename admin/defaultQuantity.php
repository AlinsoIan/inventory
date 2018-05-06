<?php
require '../php/db.php';
$des = $_GET['defaultQuantity'];
$sql = "SELECT inventory.currentQuantity AS a FROM items JOIN inventory ON items.itemID = inventory.itemID
 WHERE items.description = '$des'";
$res = $conn->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] =  $row['a'];
    }
}

echo json_encode($data);

