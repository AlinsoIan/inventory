<?php
/**
 * Created by PhpStorm.
 * User: Yanzky
 * Date: 3/31/2018
 * Time: 10:29 PM
 */

require '../php/db.php';
session_start();


$id = $_GET['id'];
$a = $_GET['from'];
$b = $_GET['to'];

$_SESSION['from'] = $a;
$_SESSION['to'] = $b;
$_SESSION['of'] = $id;



$s = "SELECT * FROM accounts";

$sql = "SELECT issuance.issuanceDate AS a,risNo,items.categoryNo AS b,items.description AS c,itemissuance.quantityIssued AS d FROM issuance
                                      JOIN itemissuance ON issuance.issuanceId = itemissuance.issuanceID JOIN items ON itemissuance.itemID = items.itemID WHERE issuance.officeID = '$id'
                                      AND issuanceDate BETWEEN '$a' AND '$b'";
$res = $conn->query($sql);

$ar = array();

while ($row = $res->fetch_assoc()){
    $ar[] = "<tr><td>".$row['a'] . "</td><td>" .$row['risNo'] . "</td><td>" .$row['b'] . "</td><td>" .$row['c'] . "</td><td>" .$row['d'] . "</td></tr>";
}

echo json_encode($ar);







