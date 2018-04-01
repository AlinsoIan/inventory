<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';
session_start();
$userID = $_SESSION['user'];

$da = date('Y:n:j');

$office = $_POST['office'];

$s = "SELECT officeID FROM offices WHERE officeName LIKE '%$office%'";
$o = $conn->query($s);
$oo = $o->fetch_row();

$item = $_POST['item'];
$s = "SELECT items.itemID,inventory.currentQuantity FROM items JOIN inventory ON items.itemID = inventory.itemID WHERE items.description LIKE '%$item%'";
$c = $conn->query($s);
$cc = $c->fetch_row();


$ress = $_POST['res'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

$sql = "INSERT INTO history(accountID,activity,actDate,type) VALUES('$userID','returned','$d','Returns')";
$conn->query($sql);


if ($c) {
    $sql = "INSERT INTO returns(itemID,officeID,itemQuantity,reason,status,accountID)
        VALUES('$cc[0]','$oo[0]','$quantity','$ress','$status','$userID')";

    $conn->query($sql);
    if ($status === "usable") {
        $b = $quantity + $cc[1];

        $sql = "UPDATE inventory SET currentQuantity = '$b' WHERE itemID = '$cc[0]'";
        $conn->query($sql);

        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$cc[0]'";
        $oo = $conn->query($sql);
        $j = $oo->fetch_row();

        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,returnsQuantity,currentQuantity,status) 
                VALUES('$cc[0]','$j[0]','$da','$cc[1]','$quantity','$b','increased')";
        $conn->query($sql);

    }



    header('Location:../../user/returns.php');


} else {
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../user/returns.php');
        </script>";
}

