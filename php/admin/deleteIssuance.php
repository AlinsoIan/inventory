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


if($res){
    while ($row = $res->fetch_assoc()){
        $ii = $row['itemID'];

        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$ii'";
        $ress = $conn->query($sql);
        $r = $ress->fetch_row();


        $nn = $r[0] + $row['quantityIssued'];


        $sql = "UPDATE inventory SET currentQuantity = '$nn' WHERE itemID = '$ii'";
        $conn->query($sql);

    }


    $sql = "DELETE FROM issuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    $sql = "DELETE FROM itemissuance WHERE issuanceID = '$i'";
    $conn->query($sql);
    header("Location:../../admin/$temp");

}else{
    $m = "Failed to Delete Issuance, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}


