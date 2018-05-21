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

$a = $_GET['n'];

$sql = "SELECT itemID,itemQuantity FROM returns WHERE returnID = '$a'";
$rr = $conn->query($sql);
$rrr = $rr->fetch_row();

$da = date('Y:n:j');



$sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$rrr[0]'";
$res = $conn->query($sql);
$r = $res->fetch_row();

$b = $r[0] - $rrr[1];

$sql = "DELETE FROM returns WHERE returnID = '$a'";

if($conn->query($sql)){

    $sql = "UPDATE inventory SET currentQuantity = '$b' WHERE itemID = '$rrr[0]'";
    $conn->query($sql);

    $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$rrr[0]'";
    $oo = $conn->query($sql);
    $j = $oo->fetch_row();

    $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,returnsQuantity,currentQuantity,status) 
                VALUES('$rrr[0]','$j[0]','$da','$r[0]','$rrr[1]','$b','decreased')";
    $conn->query($sql);



    $sql = "INSERT INTO history(accountID,returnID,activity,actDate,type,itemID)
                    VALUES ('$userID','$a','Returns Deleted','$da','Returns','$rrr[0]')";
    $conn->query($sql);

    $oo = $userID . " " . $a . " " . "Returns Deleted" . " " . $da . " " . "Returns";

    $sql = "INSERT INTO asa(a) VALUES ('$oo')";
    $conn->query($sql);

    header("Location:../../admin/returns.php");

}else{
    $m = "Failed to Delete Delivery, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/returns.php');
            </script>
            ";
}


