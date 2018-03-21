<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$type = $_POST['type'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$d = date('Y:n:j');


$sql = "INSERT INTO accounts(firstName,lastName,username,password,userType,status)
        VALUES('$first','$last','$username','$pass','$type','active')";

if($conn->query($sql)){

	$sql = "INSERT INTO accountslogs(logs,dateT) VALUES('Admin has added account $username','$d')";
	$conn->query($sql);

    header('Location:../../admin/accounts.php');

}else {
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/accounts.php');
        </script>";
}