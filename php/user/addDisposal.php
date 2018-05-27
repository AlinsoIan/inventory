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

$d = $_POST['d'];
$q = $_POST['quantity'];
$r = $_POST['remarks'];
$i = $_POST['des'];

$sql = "SELECT itemID FROM items WHERE description LIKE '%$i%'";
$tt = $conn->query($sql);
$ttt = $tt->fetch_row();

$sql = "INSERT INTO disposal(itemID,date,quantity,remarks,status) 
        VALUES ('$ttt[0]','$d','$q','$r','pending')";


if($conn->query($sql)){
        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$ttt[0]'";
        $res = $conn->query($sql);
        $r = $res->fetch_row();

        $n = $r[0] - $q;

        $sql = "UPDATE inventory SET currentQuantity ='$n' WHERE itemID = '$ttt[0]'";
        $conn->query($sql);

        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$ttt[0]'";
        $qq =$conn->query($sql);
        $q = $qq->fetch_row();


        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$ttt[0]'";
        $f = $conn->query($sql);
        $ff = $f->fetch_row();

        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,risNo,startingQuantity,issuanceQuantity,currentQuantity,status,officeID) 
                VALUES('$ttt[0]','$ff[0]','$d','$ris','$r[0]','$q','$n','decreased')";

        $conn->query($sql);

        $sql = "INSERT INTO history(accountID,iss uanceID,activity,actDate,type,itemID)
              VALUES ('$userID','$id','disposed','$d','disposal','$ttt[0]')";
        $conn->query($sql);


    header('Location:../../user/disposal.php');


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