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

$sql = "DELETE FROM items WHERE id = '$i'";

if($conn->query($sql)){

    header("Location:../../admin/$temp");

}else{
    $m = "Failed to Delete Item, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/$temp');
            </script>
            ";
}


