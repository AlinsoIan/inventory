<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$id = $_GET['ii'];




$sql = "SELECT contactPerson,contactNumber,supplierName,taxNumber,tinNumber FROM suppliers WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();



$person = $_POST['contactPerson'];
if(empty($person)){
    $person = $r[0];
}
$num = $_POST['contactNumber'];
if(empty($num)){
    $num = $r[1];
}
$name = $_POST['supplierName'];
if(empty($name)){
    $name = $r[2];
}
$tax = $_POST['tax'];
if(empty($tax)){
    $tax = $r[3];
}
$tin = $_POST['tin'];
if(empty($tin)){
    $tin = $r[4];
}


$sql = "UPDATE suppliers SET contactPerson = '$person',contactNumber = '$num',supplierName = '$name',
        taxNumber = '$tax',tinNumber = '$tin' WHERE id = '$id'";

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
