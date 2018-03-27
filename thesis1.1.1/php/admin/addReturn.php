<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';

$office = $_POST['office'];
$item = $_POST['item'];
$unit = $_POST['unit'];
$res = $_POST['res'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

$sql2 = "SELECT id FROM offices WHERE office LIKE '%$office%'";
$res = $conn->query($sql2);
if($res){
    $r = $res->fetch_row();
    $sql = "INSERT INTO returns(item_id,reason,quantity,status,office_id,unit,)
        VALUES('1','$res','$quantity','$status','$r[0]','$unit')";

    if($conn->query($sql)){

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

