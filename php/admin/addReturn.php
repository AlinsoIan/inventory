<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';

$office = $_POST['office'];

$s = "SELECT id FROM offices WHERE office LIKE '%$office%'";
$o  = $conn->query($s);
$oo = $o->fetch_row();

$item = $_POST['item'];
$s = "SELECT id,startingQuantity FROM items WHERE description LIKE '%$item%'";
$c  = $conn->query($s);
$cc = $c->fetch_row();


$ress = $_POST['res'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];


$sql2 = "SELECT id FROM offices WHERE office LIKE '%$office%'";
$res = $conn->query($sql2);
if($res){
    $r = $res->fetch_row();
    $sql = "INSERT INTO returns(item_id,quantity,status,reason,office_id)
        VALUES('$cc[0]','$quantity','$status','$ress','$oo[0]')";

    if($conn->query($sql)){
        if($status === "usable"){
            $b = $quantity + $cc[1];
            $sql = "UPDATE items SET startingQuantity = '$b' WHERE id = '$cc[0]'";
            $conn->query($sql);
        }
        header('Location:../../admin/returns.php');

    }else {
        $m = "Error! Contact Administrator!";

        echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/returns.php');
        </script>";
    }
}else{
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/returns.php');
        </script>";
}

