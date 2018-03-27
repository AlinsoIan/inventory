<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/10/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT office,abbr,fpp,responsibility FROM offices WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();


$n = $_POST['name'];
if(empty($n)){
    $n = $r[0];
}
$a = $_POST['abbr'];
if(empty($a)){
    $a = $r[1];
}
$f = $_POST['fpp'];
if(empty($f)){
    $f = $r[2];
}
$rc = $_POST['rc'];
if(empty($rc)){
    $rc = $r[3];
}


$sql = "UPDATE offices SET office = '$n',abbr = '$a',fpp = '$f',responsibility = '$rc' WHERE id = '$id'";

if($conn->query($sql)){
    header('Location:../../admin/offices.php');
}else{
    $m = "Error! Contact Administrator!";
    die($conn->error);

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/offices.php');
        </script>";
}