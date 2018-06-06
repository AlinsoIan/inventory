<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
session_start();

$ti = date('h:i:a');
$userID = $_SESSION['user'];

$a = $_GET['n'];

$sql = "SELECT issuanceDate,risNo FROM issuance WHERE issuanceID = '$a'";
$nn = $conn->query($sql);
$pp = $nn->fetch_row();


$sql = "UPDATE issuance SET status = 'approved'";
if($conn->query($sql)){
    $sql = "SELECT quantityIssued,itemID FROM itemissuance WHERE issuanceID = '$a'";
    $res = $conn->query($sql);
    if($res) {
        while ($row = $res->fetch_assoc()) {
            $qi = $row['itemID'];
            $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$qi'";
            $res = $conn->query($sql);
            $r = $res->fetch_row();
            $rrr = $row['quantityIssued'];

            $n = $r[0] - $row['quantityIssued'];
            $sql = "UPDATE inventory SET currentQuantity ='$n' WHERE itemID = '$qi'";
            $conn->query($sql);

            $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$qi'";
            $qq = $conn->query($sql);
            $q = $qq->fetch_row();


            $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$a'";
            $f = $conn->query($sql);
            $ff = $f->fetch_row();

            $sql = "SELECT officeID FROM issuance WHERE issuanceID = '$a'";
            $asd = $conn->query($sql);
            $rzx = $asd->fetch_row();

            $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,risNo,startingQuantity,issuanceQuantity,currentQuantity,status,officeID) 
                VALUES('$qi','$ff[0]','$pp[0]','$pp[1]','$r[0]','$rrr','$n','decreased','$rzx[0]')";


            if(!$conn->query($sql)){
                var_dump($conn->error);
                die;
            }

            $sql = "INSERT INTO history(accountID,issuanceID,activity,actDate,type,itemID)
              VALUES ('$userID','$a','issued','$pp[0]','issuance','$qi')";
            $conn->query($sql);
        }
    }else{
        var_dump($conn->error);
        die;
    }


    header('Location:../../admin/issuance.php');


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
