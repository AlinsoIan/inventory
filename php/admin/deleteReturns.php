<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';

$a = $_GET['n'];

$sql = "SELECT quantity,item_id FROM returns WHERE id = '$a'";
$rr = $conn->query($sql);
$rrr = $rr->fetch_row();



$sql = "SELECT startingQuantity FROM items WHERE id = '$rrr[1]'";
$res = $conn->query($sql);
$r = $res->fetch_row();

$b = $r[0] - $rrr[0];

$sql = "DELETE FROM returns WHERE id = '$a'";

if($conn->query($sql)){

    $sql = "UPDATE items SET startingQuantity = '$b' WHERE id = '$rrr[1]'";
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


