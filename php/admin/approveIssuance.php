<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
session_start();
$userID = $_SESSION['user'];
$i = $_GET['n'];


$sql = "UPDATE issuance SET status = 'approved' WHERE issuanceID = '$i'";
$conn->query($sq);


if($conn->query($sql)){




    header("Location:../../admin/pendingIssuance.php");

}else{
    var_dump($conn->error);
    die;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}


