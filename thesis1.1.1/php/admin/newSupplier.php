<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/4/2018
 * Time: 12:01 AM
 */

require 'db.php';

$tin = $_POST['tin'];
$tax = $_POST['tax'];
$supname = $_POST['supname'];


$sql = "INSERT into suppliers(name,taxNumber,tinNumber)
        VALUES('$tin','$tax','$supname') ";

if($conn->query($sql)){
    header('Location:../admin/supplier.php');
}else{
    $m="error adding of items";
    echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../admin/supplier.php');
            </script>
         ";
}