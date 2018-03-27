<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$n = $_POST['name'];
$tin = $_POST['tinNumber'];
$pN = $_POST['poNumber'];
$pD = $_POST['poDate'];



$sql = "INSERT INTO suppliers(supplierName,tinNumber,poNumber,poDate) 
VALUES('$n','$tin','$pN','$pD')";

if($conn->query($sql)){
    header("Location:../../admin/supplier.php");
}else{
    $m = "Error Adding Supplier! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/supplier.php');
            </script>
            ";
}
