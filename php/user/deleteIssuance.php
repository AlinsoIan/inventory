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
$d = $_POST['d'];


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

        /*
        if(isset($aa,$r[0],$bb,$nn,$d)) {
            $sql3 = "INSERT INTO itemrecords(itemID,currentQuantity,quantity,latestQuantity,status,date)
            VALUES ('$aa','$r[0]','$bb','$nn','increased','$d')";
            $conn->query($sql3);

        }
        */


    }




    $sql = "DELETE FROM issuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    $sql = "DELETE FROM itemissuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    header("Location:../../user/$temp");

} else {
    $m = "Failed to Delete Issuance, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../user/issuance.php');
            </script>
            ";
}


