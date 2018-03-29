<?php
require '../db.php';
$temp=$_GET['num'];

$sql = "UPDATE issuance set status = 'approved' WHERE issuanceID = '$temp'";


if($conn->query($sql)){
    header('Location:../../admin/issuance.php');
}else{
    header('Location:../../admin/issuance.php');
}
