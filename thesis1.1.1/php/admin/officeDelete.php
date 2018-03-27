<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
session_start();

$temp = $_SESSION['temp'];
$i = $_GET['n'];

$sql = "DELETE FROM offices WHERE id = '$i'";

if($conn->query($sql)){

    header("Location:../../admin/offices.php");

}else{
    $m = "Failed to Delete Office, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/offices.php');
            </script>
            ";
}


