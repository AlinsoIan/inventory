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
$userID = $_SESSION['user'];

$temp = $_SESSION['temp'];

$sql = "SELECT itemID,quantity FROM disposal WHERE disposalID = '$i'";
$res = $conn->query($sql);
$d = date('Y:n:j');


if ($res) {
    while ($row = $res->fetch_assoc()) {

        $sql1 = "SELECT currentQuantity FROM inventory WHERE itemID = " . $row['itemID'];
        $ress = $conn->query($sql1);
        $r = $ress->fetch_row();

        $nn = $r[0] + $row['quantity'];

        $sql2 = "UPDATE inventory SET currentQuantity = '$nn' WHERE itemID =" . $row['itemID'];
        $conn->query($sql2);

        $aa = $row['itemID'];
        $bb = $row['quantity'];

        $cc = $r[0] + $bb;

        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$aa'";
        $oo = $conn->query($sql);
        $j = $oo->fetch_row();

        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,issuanceQuantity,currentQuantity,status) 
                VALUES('$aa','$j[0]','$d','$r[0]','$bb','$nn','increased')";

        $conn->query($sql);

    }

    $sql = "INSERT INTO history(accountID,issuanceID,activity,actDate,type,itemID)
                    VALUES ('$userID','$i','Disposal Deleted','$d','Disposal','$aa')";
    $conn->query($sql);

    $sql = "DELETE FROM disposal WHERE disposalID = '$i'";
    $conn->query($sql);
    header("Location:../../user/$temp");

} else {
    var_dump($conn->error);
    die;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}


