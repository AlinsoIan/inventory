<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';
session_start();
$temp = $_SESSION['temp'];

$supplier = $_POST['supplier'];
$acct = $_POST['acct'];
$cat = $_SESSION['cat'];
$pgso = $_POST['pgso'];
$des = $_POST['description'];
$unit = $_POST['unit'];
$cost = $_POST['unitCost'];
$brand = $_POST['brand'];
$expiration = $_POST['expiration'];
$remarks = $_POST['remarks']



$sql2 = "SELECT supplierID FROM suppliers WHERE supplierName LIKE '%$supplier%'";
$res = $conn->query($sql2);
if($res){
    $r = $res->fetch_row();
    $sql = "INSERT INTO items(supplierID,acctSn,categoryNo,pgsoSn,description,unitID,unitCost,brand,expirationDate,remarks) 
    VALUES('$r[0]','$acct','$cat','$pgso','$des','$unit','$cost','$brand','$expiration','$remarks',)";

    if($conn->query($sql)){


        header("Location:../../admin/$temp");
    }else{
        $m = "Error Adding Item! Please contact administrator!" ;

        echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/$temp');
            </script>
            ";
    }
}else{
    $m = "Error Supplier not Found! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../../admin/$temp');
            </script>
            ";
}


