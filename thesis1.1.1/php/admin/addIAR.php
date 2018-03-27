<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';

$supp = $_POST['supplier'];
$iar = $_POST['iarno'];
$iarDate = $_POST['iarDate'];
$amount = $_POST['amount'];
$totalQuantity = $_POST['totalQuantity'];
$totalItems = $_POST['totalItems'];

$sql = "SELECT id FROM suppliers WHERE supplierName LIKE '%$SUPP%'";
$d = date('Y:n:j');
$res = $conn->query($sql);
if($res){
	$r = $res->fetch_row();
	$sql = "INSERT INTO iar(supplier_id,iarno,iarDate,amount,totalQuantity,totalItems)
	        VALUES('$r[0]','$iar','$iarDate','$amount','$totalQuantity','$totalItems')";

	if($conn->query($sql)){

	

	    header('Location:../../admin/delivery.php');

	}else {
	    $m = "Error! Contact Administrator!";

	    echo "<script type='text/javascript'>
	        
	            alert('$m');
	            window.location.replace(delivery.php)delivery.php    </script>";
	}
}else{
	$m = "Error! Contact Administrator!";

	    echo "<script type='text/javascript'>
	        
	            alert('$m');
	            window.location.replace('../../admin/iar.php')delivery.php    </script>";
}