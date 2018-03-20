<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT description,brand,startingQuantity,expirationDate FROM items WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();

//Original User Info
$Odes = $r[0];
$Obra = $r[1];
$Oquan = $r[2];
$Oexp = $r[3];


//Data From Edit To Expire
$exp = $_POST['expirationDate'];
if(empty($exp)){
    $exp = $Oexp;
}
$quan = $_POST['startingQuantity'];
if(empty($quan)){
    $quan = $Oquan;
}
$des= $_POST['description'];
if(empty($first)){
    $des = $Odes;
}
$bra = $_POST['brand'];
if(empty($bra)){
    $bra = $Obra;
}

$sql = "UPDATE items SET description = '$des',brand = '$bra',startingQuantity = '$quan',exp = '$expirationDate' 
      WHERE id = '$id'";

if($conn->query($sql)){

            header('Location:../../admin/toexpire.php');

}else{
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
            alert('$m');
            window.location.replace('../../admin/toexpire.php');
        </script>";
}