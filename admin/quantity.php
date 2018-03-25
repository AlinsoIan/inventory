<?php
require '../php/db.php';
$des = $_GET['des'];
$sql = "SELECT startingQuantity FROM items WHERE description LIKE '%$des%'";
$res = $conn->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] =  "<option value='" .$row['startingQuantity'] . "'>" . $row['startingQuantity'] . "</option>";
    }
}

echo json_encode($data);

