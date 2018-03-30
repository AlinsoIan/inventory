<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';

$a = $_GET['n'];

$sql = "SELECT itemID,itemQuantity FROM returns WHERE returnID = '$a'";
$rr = $conn->query($sql);
$rrr = $rr->fetch_row();



$sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$rrr[0]'";
$res = $conn->query($sql);
$r = $res->fetch_row();

$b = $r[0] - $rrr[1];

$sql = "DELETE FROM returns WHERE returnID = '$a'";

if($conn->query($sql)){

    $sql = "UPDATE inventory SET currentQuantity = '$b' WHERE itemID = '$rrr[0]'";
    $conn->query($sql);

    header("Location:../../user/returns.php");

}else{
    $m = "Failed to Delete Delivery, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../user/returns.php');
            </script>
            ";
}


