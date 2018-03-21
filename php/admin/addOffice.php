<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 3/10/2018
 * Time: 7:29 AM
 */

require '../db.php';


$n = $_POST['name'];
$a = $_POST['abbr'];
$f = $_POST['fpp'];
$r = $_POST['rc'];


$sql = "INSERT INTO offices(office,abbr,fpp,responsibility)
          VALUES ('$n','$a','$f','$r')";

if($conn->query($sql)){
    header('Location:../../admin/offices.php');
}else{
    $m = "Error Adding Office! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/offices.php');
            </script>
            ";
}