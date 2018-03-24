<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];
$s = "SELECT itemNo,quantity FROM delivery WHERE id = '$i'";
$res = $conn->query($s);
$r = $res->fetch_row();

$ss = "SELECT startingQuantity FROM items WHERE id ='$r[0]'";
$ress = $conn->query($ss);
$rr = $ress->fetch_row();

$n = $rr[0] - $r[1];

$sq = "UPDATE items SET startingQuantity = '$n' WHERE id = '$r[0]'";
$conn->query($sq);

$sql = "DELETE FROM delivery WHERE id = '$i'";

if($conn->query($sql)){

    header("Location:../../admin/delivery.php");

}else{
    $m = "Failed to Delete Delivery, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}


