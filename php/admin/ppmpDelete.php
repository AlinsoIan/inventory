<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require '../db.php';
$i = $_GET['n'];

$sql = "DELETE FROM ppmp_items WHERE ppmp_id = '$i'";
$conn->query($sql);

$sql = "DELETE FROM ppmp WHERE id = '$i'";

if($conn->query($sql)){


    header("Location:../../admin/ppmp.php");

}else{
    $m = "Failed to Delete Item, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/ppmp.php');
            </script>
            ";
}


