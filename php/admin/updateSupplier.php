<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/11/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT tinNo,supplierName,address,contactNo FROM suppliers WHERE supplierID = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();


$t = $_POST['tin'];
if(empty($t)){
    $t = $r[0];
}
$n = $_POST['supplierName'];
if(empty($n)){
    $n = $r[1];
}
$add = $_POST['address'];
if(empty($add)){
    $add = $r[2];
}
$cn = $_POST['contactNo'];
if(empty($cn)){
    $cn = $r[3];
}


$sql = "UPDATE suppliers SET tinNumber = '$t',supplierName = '$n',address = '$add',contactNo = '$cn' WHERE supplierID = '$id'";

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