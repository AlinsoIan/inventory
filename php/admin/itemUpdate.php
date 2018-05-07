<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';
session_start();
$temp = $_SESSION['temp'];
$id = $_GET['ii'];
$userID = $_SESSION['user'];
$t = date('h:i:a');
$d = date('Y:n:j');

$sql = "SELECT acctSn,pgsoSn,description,units.unitName,unitCost,brand,supplierID FROM items JOIN units ON items.unitID = units.unitID WHERE itemID = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();


$acct = $r[0];
if($_POST['acct'] != $acct){
    $acct = $_POST['acct'];
    $act = "Updated ACCT NO from " . $r[0] . " to " . $acct;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);
}
$pgso = $r[1];
if($_POST['pgso'] != $pgso){
    $pgso = $_POST['pgso'];
    $act = "Updated PGSO NO from " . $r[1] . " to " . $pgso;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);
}
$des = $r[2];
if($_POST['description'] != $des){
    $des = $_POST['description'];
    $act = "Updated description from " . $r[2] . " to " . $des;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);

}
$unit = $r[3];
$sql = "SELECT unitID FROM units WHERE unitName LIKE '%$unit%'";
$pp = $conn->query($sql);
$ppp = $pp->fetch_row();
$unit = $ppp[0];

if($_POST['unit'] != $unit){
    $unit = $_POST['unit'];
    $sql = "SELECT unitName FROM units WHERE unitID = '$unit'" ;
    $mm = $conn->query($sql);
    $mmm = $mm->fetch_row();

    $unitz = $mmm[0];

    $act = "Updated units from " . $r[3] . " to " . $unitz;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);

}

$cost = $r[4];
if($_POST['unitCost'] != $cost){
    $cost = $_POST['unitCost'];
    $act = "Updated cost from " . $r[4] . " to " . $cost;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);
}

$brand = $r[5];
if($_POST['brand'] != $brand) {
    $brand = $_POST['brand'];
    $act = "Updated brand from " . $r[5] . " to " . $brand;
    $sql = "INSERT INTO updatehistory(accountID,activity,time,date,type,itemID) VALUES ('$userID','$act','$t','$d','Item Update','$id')";
    $conn->query($sql);
}


$supplier = $r[6];
if($_POST['brand'] != $brand){
    $supplier = $_POST['supplier'];

}


$sql = "UPDATE items SET acctSn = '$acct',pgsoSn = '$pgso',description = '$des',unitID = '$unit',unitCost = '$cost',brand = '$brand',supplierID = '$supplier' WHERE itemID = '$id'";

if($conn->query($sql)){

    $sql = "UPDATE inventory SET currentQuantity = '$quan' WHERE itemID = '$id'";
    $conn->query($sql);
    header("Location:../../admin/$temp");
}else{


    $m = $unit;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/$temp');
            </script>
            ";
}
