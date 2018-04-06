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

$username = $_POST['username'];

$pass = $_POST['pass'];
$password = password_hash($pass,PASSWORD_BCRYPT);
$d = date('Y:n:j');

$type = $_POST['type'];


$sql = "INSERT INTO accounts(firstName,lastName,userName,password,userType,status)
        VALUES('$first','$last','$username','$pass','$type','active')";

if($conn->query($sql)){

	
    header('Location:../../admin/accounts.php');

}else {
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/accounts.php');
        </script>";
}