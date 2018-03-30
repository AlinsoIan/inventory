`<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';
session_start();
$temp = $_SESSION['temp'];
$cat = $_SESSION['cat'];
$acct = $_POST['acct'];
$pgso = $_POST['pgso'];
$des = $_POST['description'];
$unit = $_POST['unit'];
$brand = $_POST['brand'];
$quan = $_POST['sQuantity'];
$cost = $_POST['unitCost'];
$supplier = $_POST['supplier'];


$level = floor($quan * .2);

$sql2 = "SELECT supplierID FROM suppliers WHERE supplierName LIKE '%$supplier%'";
$res = $conn->query($sql2);
if($res){
    $r = $res->fetch_row();
<<<<<<< HEAD
    $sql = "INSERT INTO items(category,acctSn,pgsoSn,description,unit,startingQuantity,unitCost,brand,orderPoint,supplier_id) 
    VALUES('$cat','$acct','$pgso','$des','$unit','$quan','$cost','$brand','$level','$r[0]')";
=======

    $z = "SELECT unitID FROM units WHERE unitName LIKE '%$unit%'";
    $zz = $conn->query($z);
    $zzz = $zz->fetch_row();

    $sql = "INSERT INTO items(categoryNo,acctSn,pgsoSn,description,unitID,unitCost,brand,supplierID) 
    VALUES('$cat','$acct','$pgso','$des','$zzz[0]','$cost','$brand','$r[0]')";
>>>>>>> da291964dd17707c5de8b52fb9cc2f869770dd74

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


