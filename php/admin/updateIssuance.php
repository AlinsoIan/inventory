<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
$id = $_GET['num'];


$sql = "SELECT division,office,responsibility,fpp,ris,sai,dateT,timeT,
        category,description,unit,quantityRequested,quantityIssued,remarks 
        FROM issuance JOIN itemissuance ON issuance.id = itemissuance.issue_id WHERE issuance.id = '$id'";

$res= $conn->query($sql);
$r = $res->fetch_row();



$ti = date('h:i:a');

$division = $_POST['division'];
if(empty($division)){
    $division = $r[0];
}
$office = $_POST['office'];
if(empty($office)){
    $office = $r[1];
}
$responsibility = $_POST['responsibilityCenter'];
if(empty($responsibility)){
    $responsibility = $r[2];
}
$fpp = $_POST['fpp'];
if(empty($fpp)){
    $fpp = $r[3];
}
$ris = $_POST['ris'];
if(empty($ris)){
    $ris = $r[4];
}
$sai = $_POST['sai'];
if(empty($sai)){
    $sai = $r[5];
}
$d = $_POST['d'];
if(empty($d)){
    $d = $r[6];
}
$t = $_POST['type'];

$sql = "UPDATE issuance SET division = '$division',office = '$office',responsibility = '$responsibility',
        fpp = '$fpp',ris = '$ris',sai = '$sai',dateT = '$d',typeT = '$t'";

if(!$conn->query($sql)){
    echo "Error!";
}

$category = $_POST['category'];
$des = $_POST['description'];
$unit = $_POST['unit'];
$qRequested = $_POST['q'];
$qIssued = $_POST['i'];
$remarks = $_POST['remarks'];



$cat = [];
foreach ($category as $a){
    if(!empty($a)) {
        array_push($cat,$a);
    }
}

$dess = [];
foreach ($des as $a){
        array_push($dess,$a);

}
$u = [];
foreach ($unit as $a){
        array_push($u,$a);

}
$req = [];
foreach ($qRequested as $a){
        array_push($req,$a);
    }
$iss = [];
foreach ($qIssued as $a){
        array_push($iss,$a);

}
$rem = [];
foreach ($remarks as $a){
        array_push($rem,$a);

}



for ($m = 0;count($cat) >= $m;$m++) {
    $sql = "UPDATE itemissuance SET category ='$cat[$m]' WHERE issue_id = '$id'";


    /*
     * $sql = "UPDATE itemissuance SET category ='$cat[$m]',description = '$des[$m]',unit='$unit[$m]',
                quantityRequested = '$qIssued[$m]',quantityIssued='$qRequested[$m]',remarks='$remarks[$m]' WHERE issue_id = '$id'";
     */
    $conn->query($sql);
}


header('Location:../../admin/issuance.php');

