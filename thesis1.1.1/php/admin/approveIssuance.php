<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/7/2018
 * Time: 9:02 PM
 */
require '../db.php';

$a = $_GET['num'];


$sql = "UPDATE issuance SET status = 'approved' WHERE id = '$a'";

if($conn->query($sql)){
    header('Location:../../admin/issuance.php');
}else{
    $m = "Failed to Update Issuance, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/issuance.php');
            </script>
            ";
}