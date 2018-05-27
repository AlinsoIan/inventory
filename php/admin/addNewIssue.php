<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
session_start();

$ti = date('h:i:a');
$userID = $_SESSION['user'];

$ris = $_POST['ris'];
$office = $_POST['office'];
$division = $_POST['division'];

$sql = "SELECT officeID FROM offices WHERE officeName LIKE '%" . $office ."%'";
$res = $conn->query($sql);
$rzx = $res->fetch_row();
$sai = $_POST['sai'];
$d = $_POST['d'];
$s = $_SESSION['user'];


$sql = "INSERT INTO issuance(division,officeID,risNo,saiNo,issuanceDate,issuanceTime,status,accountID) 
        VALUES ('$division','$rzx[0]','$ris','$sai','$d','$ti','approved','$s')";




$des = $_POST['des'];
$dess = [];
foreach ($des as $a){
    array_push($dess,$a);

}
$qRequested = $_POST['qRequested'];
$qIssued = $_POST['qIssued'];
$remarks = $_POST['remarks'];

if($conn->query($sql)){
    $v = mysqli_insert_id($conn);
    $aa = mysqli_insert_id($conn);

    $dess = [];
    foreach ($des as $a){
        array_push($dess,$a);

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

    $id = mysqli_insert_id($conn);
    for ($m = 0;count($des) > $m;$m++) {

        $sql = "SELECT itemID FROM items WHERE description LIKE '%$dess[$m]%'";
        $tt = $conn->query($sql);
        $ttt = $tt->fetch_row();

        $sql = "INSERT INTO itemissuance(issuanceID,itemID,quantityRequested, quantityIssued, remarks)
                      VALUES('$aa','$ttt[0]','$req[$m]','$iss[$m]','$rem[$m]')";
        $conn->query($sql);

        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$ttt[0]'";
        $res = $conn->query($sql);
        $r = $res->fetch_row();

        $n = $r[0] - $iss[$m];

        $sql = "UPDATE inventory SET currentQuantity ='$n' WHERE itemID = '$ttt[0]'";
        $conn->query($sql);

        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$ttt[0]'";
        $qq =$conn->query($sql);
        $q = $qq->fetch_row();


        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$ttt[0]'";
        $f = $conn->query($sql);
        $ff = $f->fetch_row();

        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,risNo,startingQuantity,issuanceQuantity,currentQuantity,status,officeID) 
                VALUES('$ttt[0]','$ff[0]','$d','$ris','$r[0]','$iss[$m]','$n','decreased','$rzx[0]')";

        $conn->query($sql);

        $sql = "INSERT INTO history(accountID,issuanceID,activity,actDate,type,itemID)
              VALUES ('$userID','$id','issued','$d','issuance','$ttt[0]')";
        $conn->query($sql);

    }



    header('Location:../../admin/issuance.php');


}else{
    var_dump($conn->error);
    die;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}