<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
session_start();
$userID = $_SESSION['user'];
$i = $_GET['n'];
$da = date('Y:n:j');
$s = "SELECT itemID,totalQuantity FROM deliveryItems WHERE deliveryID = '$i'";
$res = $conn->query($s);
$r = $res->fetch_row();

$ss = "SELECT currentQuantity FROM inventory WHERE itemID ='$r[0]'";
$ress = $conn->query($ss);
$rr = $ress->fetch_row();

$n = $rr[0] - $r[1];

$sq = "UPDATE inventory SET currentQuantity = '$n' WHERE itemID = '$r[0]'";
$conn->query($sq);

$sql = "DELETE FROM delivery WHERE deliveryID = '$i'";

if($conn->query($sql)){

    $sql = "DELETE FROM deliveryItems WHERE deliveryID = '$i'";
    $conn->query($sql);

    $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$r[0]'";
    $h = $conn->query($sql);
    $hh = $h->fetch_row();

    $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$r[0]'";
    $f = $conn->query($sql);
    $ff = $f->fetch_row();

    $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,deliveryQuantity,
                            currentQuantity,status)
                            VALUES('$r[0]','$ff[0]','$da','$rr[0]','$r[1]','$hh[0]','decreased')";
    $conn->query($sql);

    $sql = "INSERT INTO history(accountID,deliveryID,activity,actDate,type,itemID)
                    VALUES ('$userID','$i','Delivery Deleted','$da','Delivery','$r[0]')";
    $conn->query($sql);



    header("Location:../../admin/delivery.php");

}else{
    var_dump($conn->error);
    die;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}


