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



$sql = "INSERT into ACCOUNTS(firstName,lastName,username,password,userType)
        VALUES('$first','$last','$username','$pass','$type')";

if($conn->query($sql)){

    echo "<script type='text/javascript'>
            window.location.replace('../../admin/accounts.php');
        </script>";

}else {
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/accounts.php');
        </script>";
}