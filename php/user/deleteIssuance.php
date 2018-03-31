<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];
session_start();

$temp = $_SESSION['temp'];

$sql = "SELECT itemID,quantityIssued FROM itemissuance WHERE issuanceID = '$i'";
$res = $conn->query($sql);
$d = date('Y:n:j');


if ($res) {
    while ($row = $res->fetch_assoc()) {

        $sql1 = "SELECT currentQuantity FROM inventory WHERE itemID = " . $row['itemID'];
        $ress = $conn->query($sql1);
        $r = $ress->fetch_row();

        $nn = $r[0] + $row['quantityIssued'];

        $sql2 = "UPDATE inventory SET currentQuantity = '$nn' WHERE itemID =" . $row['itemID'];
        $conn->query($sql2);

        $aa = $row['itemID'];
        $bb = $row['quantityIssued'];

        $cc = $r[0] + $bb;

        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$aa'";
        $oo = $conn->query($sql);
        $j = $oo->fetch_row();

        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,issuanceQuantity,currentQuantity,status) 
                VALUES('$aa','$j[0]','$d','$r[0]','$bb','$nn','increased')";

        $conn->query($sql);


    }



    $sql = "DELETE FROM issuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    $sql = "DELETE FROM itemissuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    header("Location:../../user/issuance.php");

} else {
    $m = "Failed to Delete Issuance, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../user/issuance.php');
            </script>
            ";
}


