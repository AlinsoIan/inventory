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
$ty = $_POST['type'];


$sql = "INSERT INTO issuance(division,officeID,risNo,saiNo,issuanceDate,issuanceTime,status,accountID,type) 
        VALUES ('$division','$rzx[0]','$ris','$sai','$d','$ti','pending','$s','$ty')";




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



    }



    header('Location:../../user/issuance.php');


}else{
    var_dump($conn->error);
    die;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../user/issuance.php');
            </script>
            ";
}