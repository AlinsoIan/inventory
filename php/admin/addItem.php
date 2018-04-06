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

    $z = "SELECT unitID FROM units WHERE unitName LIKE '%$unit%'";
    $zz = $conn->query($z);
    $zzz = $zz->fetch_row();

    $sql = "INSERT INTO items(categoryNo,acctSn,pgsoSn,description,unitID,unitCost,brand,supplierID) 
    VALUES('$cat','$acct','$pgso','$des','$zzz[0]','$cost','$brand','$r[0]')";

    if($conn->query($sql)){
        $f = mysqli_insert_id($conn);
        $sql = "INSERT INTO inventory(itemID,currentQuantity,startingQuantity,reorderPoint)
                VALUES ('$f','$quan','$quan','$level')";

        $conn->query($sql);
        header("Location:../../admin/$temp");
    }else{
        $m = "Error Adding Item! Please contact administrator!";

        echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/$temp');  
            </script>
            ";
    }
}else{
    $m = $conn->errno;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../../admin/$temp');
            </script>
            ";
}


