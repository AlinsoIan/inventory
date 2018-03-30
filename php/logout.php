<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/8/2018
 * Time: 4:06 PM
 */

session_start();


require 'db.php';

$t = date('h:i:a');
$user = $_SESSION['username'];
$a = $_SESSION['logID'];

$sql = "UPDATE logs SET logoutTime = '$t' WHERE logID = '$a'";
if($conn->query($sql)){
    session_destroy();
    header('Location:../index.php');
}
else{
    session_destroy();
    header('Location:../index.php');
}
