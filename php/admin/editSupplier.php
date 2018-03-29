<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$number = $_POST['contactNumber'];
$name = $_POST['supplierName'];
$address = $_POST['address'];
$tin = $_POST['tinNumber'];



$sql = "INSERT INTO suppliers(tinNo,supplierName,address,contactNo) 
VALUES('$tin','$name','$address','$number')";

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
