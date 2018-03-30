<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];

$sql2 = "SELECT userName, userType FROM accounts WHERE accountID = '$i'";

$res = $conn->query($sql2);
$r = $res->fetch_row();

$d = date('Y:n:j');

if($r[1] == "user"){

    $sql = "UPDATE accounts SET status = 'inactive' WHERE accountID = '$i'";


    if($conn->query($sql)) {

        $sql = "INSERT INTO accountslogs(logs,dateT) VALUES('Admin has deleted account $r[1]','$d')";
        $conn->query($sql);
        header('Location:../../admin/accounts.php');
    }
}else{
    $m = "Failed to Delete Administrator Account!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/accounts.php');
            </script>
            ";
}