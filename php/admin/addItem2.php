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
$quan = $_POST['sQuantity'];

$level = floor($quan * .2);

$sql2 = "SELECT supplierID FROM suppliers WHERE supplierName LIKE '%" . $supplier. "%'";
$res = $conn->query($sql2);
if($res){
    $r = $res->fetch_row();

    $z = "SELECT unitID FROM units  WHERE unitName LIKE '%$unit%'";
    $zz = $conn->query($z);
    $zzz = $zz->fetch_row();

    $sql = "INSERT INTO items(categoryNo,acctSn,pgsoSn,description,unitID,unitCost,brand,supplierID,expirationDate) 
    VALUES('$cat','$acct','$pgso','$des','$zzz[0]','$cost','$brand','$r[0]','$expiration')";

    if($conn->query($sql)){
        $f = mysqli_insert_id($conn);
        $sql = "INSERT INTO inventory(itemID,currentQuantity,startingQuantity,reorderPoint)
                VALUES ('$f','$quan','$quan','$level')";

        $conn->query($sql);

        header("Location:../../admin/" .$temp);

    }else{
        $m = "Error Adding Item! Please contact administrator!!" ;

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


