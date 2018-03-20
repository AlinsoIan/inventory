<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];

$sql = "UPDATE issuance SET status = 'approved' WHERE id = '$i'";

if($conn->query($sql)) {
        header('Location:../../admin/issuance.php');
}else{
    $m = "Failed to Accept issuance!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}