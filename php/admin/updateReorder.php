<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$id = $_GET['ii'];




$sql = "SELECT tinNo,supplierName,address,contactNo FROM suppliers WHERE supplierID = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();


$tin = $_POST['tin'];
if(empty($tin)){
    $tin = $r[0];
}
$name = $_POST['supplierName'];
if(empty($name)){
    $name = $r[1];
}
$name = $_POST['address'];
if(empty($address)){
    $address = $r[2];
}
$num = $_POST['contactNo'];
if(empty($num)){
    $num = $r[3];
}





$sql = "UPDATE suppliers SET tinNo = '$tin',supplierName = '$name',address = '$address',contactNumber = '$num' WHERE supplierID = '$id'";

if($conn->query($sql)){
    header("Location:../../admin/supplier.php");
}else{
    $m = "Error Updating Supplier! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/supplier.php');
            </script>
            ";
}
