<?php
/**
 * Created by PhpStorm.
 * User: Yanzky
 * Date: 3/31/2018
 * Time: 10:29 PM
 */

require '../php/db.php';


$a = $_GET['office'];

$sql = "SELECT fppCode,rcCode FROM offices WHERE officeName LIKE '%$a%'";
$res = $conn->query($sql);
$r = $res->fetch_row();


echo json_encode($r);


