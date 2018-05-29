<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';
session_start();
$temp = $_SESSION['temp'];

$acct = $_POST['acct'];
$cat = $_SESSION['cat'];
$pgso = $_POST['pgso'];
$des = $_POST['description'];
$unit = $_POST['unit'];
$cost = $_POST['unitCost'];
$expiration = $_POST['expiration'];
$quan = $_POST['sQuantity'];

$level = floor($quan * .2);



    $z = "SELECT unitID FROM units  WHERE unitName LIKE '%$unit%'";
    $zz = $conn->query($z);
    $zzz = $zz->fetch_row();

    $sql = "INSERT INTO items(categoryNo,acctSn,pgsoSn,description,unitID,unitCost,expirationDate) 
    VALUES('$cat','$acct','$pgso','$des','$zzz[0]','$cost','$expiration')";

    if($conn->query($sql)){
        $f = mysqli_insert_id($conn);
        $sqlz = "INSERT INTO inventory(itemID,currentQuantity,startingQuantity,reorderPoint)
                VALUES ('$f','$quan','$quan','$level')";

        $conn->query($sqlz);

        header("Location:../../admin/" .$temp);

    }else{
        var_dump($conn->error);
        die;

        echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/$temp');
            </script>
            ";
    }



