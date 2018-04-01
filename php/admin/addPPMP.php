<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */
require '../db.php';
session_start();
$category = $_POST['category'];
$item = $_POST['des'];
$quan = $_POST['quantity'];
$unitCost = $_POST['unitCost'];
$d = $_POST['d'];
$office = $_POST['office'];
$cat = [];
foreach ($category as $a) {
    if (!empty($a)) {
        array_push($cat, $a);
    }
}
$itemz = [];
foreach ($item as $a) {
    array_push($itemz, $a);
}
$quanz = [];
foreach ($quan as $a) {
    array_push($quanz, $a);
}
$unitz = [];
foreach ($unitCost as $a) {
    array_push($unitz, $a);
}
$sq = "SELECT officeID FROM offices WHERE officeName LIKE '%$office%'";
$ress = $conn->query($sq);
$rr = $ress->fetch_row();


$sql = "INSERT INTO ppmp(officeID,ppmpDate) VALUES('$rr[0]','$d')";
$conn->query($sql);
$v = mysqli_insert_id($conn);
for ($m = 0; count($cat) > $m; $m++) {
    $s = "SELECT itemID FROM items WHERE description LIKE '%$item[$m]%'";
    $res = $conn->query($s);
    $r = $res->fetch_row();
    $sql = "INSERT INTO ppmpitems(itemID,itemQuantity,unitCost,ppmpID)
                      VALUES('$r[0]','$quanz[$m]','$unitz[$m]','$v')";
    $conn->query($sql);
}
header('Location:../../admin/ppmp.php');