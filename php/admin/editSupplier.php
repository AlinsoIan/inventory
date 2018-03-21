<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$person = $_POST['contactPerson'];
$number = $_POST['contactNumber'];
$name = $_POST['supplierName'];
$tax = $_POST['taxNumber'];
$tin = $_POST['tinNumber'];



$sql = "INSERT INTO suppliers(supplierName,taxNumber,tinNumber,contactPerson,contactNumber) 
VALUES('$name','$person','$number','$tax','$tin')";

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
