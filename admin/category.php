<?php
require '../php/db.php';
$category = $_GET['category'];
$sql = "SELECT itemID,description FROM items WHERE categoryNo =  ".$category;
$res = $conn->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] =  "<option value='" .$row["itemID"] . "'>" . $row["description"] . "</option>";
    }
}

echo json_encode($data);