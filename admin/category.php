<?php
require '../php/db.php';
$category = $_GET['category'];
$sql = "SELECT description FROM items WHERE category =  ".$category;
$res = $conn->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] =  "<option value=" .$row['description'] .">" . $row['description'] . "</option>";
    }
}

echo json_encode($data);

