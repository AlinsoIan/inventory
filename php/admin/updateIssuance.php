<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
session_start();

$aa = $_SESSION['idTemp'];

$ti = date('h:i:a');
$userID = $_SESSION['user'];




$des = $_POST['des'];
$dess = [];
foreach ($des as $a){
    array_push($dess,$a);

}
$qRequested = $_POST['qRequested'];
$qIssued = $_POST['qIssued'];
$remarks = $_POST['remarks'];



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

    $sql = "DELETE FROM itemissuance WHERE issuanceID = '$aa'";
    $conn->query($sql);

    for ($m = 0;count($des) > $m;$m++) {

        $sql = "SELECT itemID FROM items WHERE description LIKE '%$dess[$m]%'";
        $tt = $conn->query($sql);
        $ttt = $tt->fetch_row();

        $sql = "INSERT INTO itemissuance(issuanceID,itemID,quantityRequested, quantityIssued, remarks)
                      VALUES('$aa','$ttt[0]','$req[$m]','$iss[$m]','$rem[$m]')";
        $conn->query($sql);




    }


    header('Location:../../admin/issuance.php');


