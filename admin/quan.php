<?php
require '../php/db.php';
$item = $_GET['item'];
$sql = "SELECT currentQuantity FROM inventory JOIN items ON inventory.itemID = items.itemID WHERE items.description = '$item'";
$res = $conn->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] = $row["currentQuantity"];
    }
}
echo json_encode($data);