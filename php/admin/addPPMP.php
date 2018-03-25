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
$amount = $_POST['amount'];
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
$amountz = [];
foreach ($amount as $a) {
        array_push($amountz, $a);

}

$sq = "SELECT id FROM offices WHERE office LIKE '%$office%'";
$ress = $conn->query($sq);
$rr = $ress->fetch_row();
$mm = "INSERT INTO ppmp(office_id,dateT) VALUES ('$rr[0]','$d')";
$conn->query($mm);
$ii = mysqli_insert_id($conn);

    for ($m = 0; count($cat) > $m; $m++) {

        $s = "SELECT id FROM items WHERE description LIKE '%$item[$m]%'";
        $res = $conn->query($s);
        $r = $res->fetch_row();




        $sql = "INSERT INTO ppmp_items(ppmp_id,itemNo,quantity,unitCost,amount)
                      VALUES('$ii','$r[0]','$quanz[$m]','$unitz[$m]','$amountz[$m]')";
        $conn->query($sql);



    }
    header('Location:../../admin/ppmp.php');


