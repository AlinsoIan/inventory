<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
session_start();
$userID = $_SESSION['user'];
$ti = date('h:i:a');

$iar = $_POST['iarno'];
$rcpt = $_POST['rcpt'];
$item = $_POST['des'];
$supp = $_POST['supplier'];
$quan = $_POST['quantity'];
$da = $_POST['d'];
$da1 = $_POST['pod'];
$poNum = $_POST['pon'];
$rem = $_POST['remarks'];
$cost = $_POST['unitCost'];
$tCost = $_POST['totalCost'];
$u = $_POST['unit'];
$b = $_POST['brand'];


$remz = [];
foreach ($rem as $a) {
    array_push($remz, $a);

}

$br = [];
foreach ($b as $a) {
    array_push($br, $a);

}

$uu = [];
foreach ($u as $a) {
    array_push($uu, $a);

}

$tCostz = [];
foreach ($tCost as $a) {
    array_push($tCostz, $a);

}

$costz = [];
foreach ($cost as $a) {
    array_push($costz, $a);

}

$quanz = [];
foreach ($quan as $a) {
        array_push($quanz, $a);

}

$quanz = [];
foreach ($quan as $a) {
    array_push($quanz, $a);

}

$itemz = [];
foreach ($item as $a) {
    array_push($itemz, $a);

}

$suppz = [];
foreach ($supp as $a) {
    array_push($suppz, $a);

}



if (COUNT($item)) {

    $sql = "INSERT INTO delivery(iarNo,deliveryDate,accountID,poDate,poNumber,rcptNo) VALUES ('$iar','$da','$userID','$da1','$poNum','$rcpt')";
    if($conn->query($sql)){
        $id = mysqli_insert_id($conn);

        for ($m = 0; count($item) > $m; $m++) {

            $s = "SELECT items.itemID,inventory.currentQuantity FROM items JOIN inventory on items.itemID = inventory.itemID WHERE items.description LIKE '%" . $itemz[$m] ."%'";


            if ($res = $conn->query($s)) {
                $r = $res->fetch_row();

                $sq = "SELECT supplierID FROM suppliers WHERE supplierName LIKE '%" . $suppz[$m] . "%'";
                $ress = $conn->query($sq);
                if ($ress->num_rows > 0) {
                    $rr = $ress->fetch_row();


                    $sql = "INSERT INTO deliveryItems(deliveryID,itemID,totalQuantity,unitCost,remarks,supplierID,totalCost,unitID,brand)
                      VALUES('$id','$r[0]','$quanz[$m]','$costz[$m]', '$remz[$m]','$rr[0]','$tCostz[$m]','$uu[$m]','$br[$m]')";

                    if($conn->query($sql)){
                        $v = mysqli_insert_id($conn);
                        $n = $r[1] + $quan[$m];

                        $ss = "UPDATE inventory SET currentQuantity = '$n' WHERE itemID = '$r[0]'";
                        $conn->query($ss);

                        $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$r[0]'";
                        $g = $conn->query($sql);
                        $gg = $g->fetch_row();

                        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$r[0]'";
                        $f = $conn->query($sql);
                        $ff = $f->fetch_row();



                        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,iarNo,startingQuantity,deliveryQuantity,
                            currentQuantity,status,supplierID)
                            VALUES('$r[0]','$ff[0]','$da','$iar','$r[1]','$quanz[$m]','$gg[0]','increased','$rr[0]')";
                        $conn->query($sql);

                        $sql = "INSERT INTO history(accountID,deliveryID,activity,actDate,type,itemID)
                    VALUES ('$userID','$v','delivered','$da','Delivery','$r[0]')";
                        $conn->query($sql);

                    }else {
                        var_dump($conn->error);
                        die;

                        echo "
                            <script type = 'text/javascript'>
                            alert('$m');
                            window.location.replace('../../admin/delivery.php');
                            </script>
                            ";
                                    }




                } else {
                    $m = "Error Adding Inserting!";

                    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/delivery.php');
            </script>
            ";
                }
            } else {
                $m = "Error Adding Item!";

                echo "
                <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../../admin/delivery.php');
                </script>
                ";
            }


        }
    }else{
        var_dump($conn->error);
        die;
    }


    header('Location:../../admin/delivery.php');

} else {

    $m = "Error Adding Issuance!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/delivery.php');
            </script>
            ";
}
