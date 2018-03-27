<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/11/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT supplierName,tinNumber,poNumber,poDate FROM suppliers WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();


$n = $_POST['supplierName'];
if(empty($n)){
    $n = $r[0];
}
$t = $_POST['tin'];
if(empty($t)){
    $t = $r[1];
}
$pN = $_POST['poNumber'];
if(empty($pN)){
    $pN = $r[2];
}
$pD = $_POST['poDate'];
if(empty($pD)){
    $pD = $r[3];
}


$sql = "UPDATE suppliers SET supplierName = '$n',tinNumber = '$t',poNumber = '$pN',poDate = '$pD' WHERE id = '$id'";

if($conn->query($sql)){
    header('Location:../../admin/supplier.php');
}else{
    $m = "Error Updating Supplier! Contact Administrator!";
    die($conn->error);

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/supplier.php');
        </script>";
}