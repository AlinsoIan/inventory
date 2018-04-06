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
$category = $_POST['cat'];
$item = $_POST['item'];
$supp = $_POST['supplier'];
$quan = $_POST['quantity'];
$da = $_POST['d'];


$cat = [];
foreach ($category as $a) {
    if (!empty($a)) {
        array_push($cat, $a);
    }
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



if (COUNT($cat)) {


    for ($m = 0; count($cat) > $m; $m++) {

        $s = "SELECT items.itemID,inventory.currentQuantity FROM items JOIN inventory on items.itemID = inventory.itemID WHERE items.description LIKE '%" .$itemz[$m] . "%'";
        $res = $conn->query($s);

        if ($res->num_rows > 0) {
            $r = $res->fetch_row();

            $sq = "SELECT supplierID FROM suppliers WHERE supplierName LIKE '%" . $suppz[$m] . "%'";
            $ress = $conn->query($sq);
            if ($ress->num_rows > 0) {
                $rr = $ress->fetch_row();


                $sql = "INSERT INTO delivery(supplierID,itemID,iarNo,totalQuantity,deliveryDate,accountID)
                      VALUES('$rr[0]','$r[0]', '$iar', '$quanz[$m]','$da','$userID')";

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
                            currentQuantity,status)
                            VALUES('$r[0]','$ff[0]','$da','$iar','$r[1]','$quanz[$m]','$gg[0]','increased')";
                    $conn->query($sql);

                    $sql = "INSERT INTO history(accountID,deliveryID,activity,actDate,type)
                    VALUES ('$userID','$v','delivered','$da','Delivery')";
                    $conn->query($sql);

                }else {
                    $m = $conn->error;

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
