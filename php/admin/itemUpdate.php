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
$id = $_GET['ii'];

$sql = "SELECT category,acctSn,pgsoSn,description,unit,startingQuantity,unitCost,brand FROM items WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();

$category = $_POST['category'];
if(empty($category)){
    $category = $r[0];
}
$acct = $_POST['acct'];
if(empty($acct)){
    $acct = $r[1];
}
$pgso = $_POST['pgso'];
if(empty($pgso)){
    $pgso = $r[2];
}
$des = $_POST['description'];
if(empty($des)){
    $des = $r[3];
}
$unit = $_POST['unit'];
if(empty($unit)){
    $unit = $r[4];
}
$quan = $_POST['sQuantity'];
if(empty($quan)){
    $quan = $r[5];
}

$cost = $_POST['unitCost'];
if(empty($cost)){
    $cost = $r[6];
}
$brand = $_POST['brand'];
if(empty($brand)){
    $brand = $r[7];
}



$sql = "UPDATE items SET category = '$category',acctSn = '$acct',pgsoSn = '$pgso',description = '$des',unit = '$unit',
        startingQuantity = '$quan',unitCost = '$cost',brand = '$brand' WHERE id = '$id'";

if($conn->query($sql)){
    header("Location:../../admin/$temp");
}else{


    $m = "Error Updating Item! Please contact administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/$temp');
            </script>
            ";
}
