<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];

$sql2 = "SELECT userType FROM accounts WHERE id = '$i'";

$res = $conn->query($sql2);
$r = $res->fetch_row();



if($r[0] == "user"){

    $sql = "DELETE FROM accounts WHERE id = '$i'";

    if($conn->query($sql)) {
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