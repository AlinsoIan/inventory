<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/4/2018
 * Time: 12:01 AM
 */

require 'db.php';

$tin = $_POST['tin'];
$supname = $_POST['supname'];
$address = $_POST['address'];
$number = $_POST['contactNo'];


$sql = "INSERT into suppliers(tinNo,supplierName,address,contactNo)
        VALUES('$tin','$supname','$address','number')";

if($conn->query($sql)){
    header('Location:../admin/supplier.php');
}else{
    $m="error adding of items";
    echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../admin/supplier.php');
            </script>
         ";
}