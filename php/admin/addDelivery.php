<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 2/25/2018
 * Time: 9:49 AM
 */

require '../db.php';
session_start();

$ti = date('h:i:a');

$iar = $_POST['iarno'];
$category = $_POST['cat'];
$item = $_POST['item'];
$unit = $_POST['units'];
$supp = $_POST['supplier'];
$quan = $_POST['quantity'];
$d = $_POST['d'];


$cat = [];
foreach ($category as $a) {
    if (!empty($a)) {
        array_push($cat, $a);
    }
}


if (COUNT($cat)) {


    for ($m = 0; count($cat) > $m; $m++) {

        $s = "SELECT id FROM items WHERE description LIKE '%$item[$m]%'";
        $res = $conn->query($s);

        if ($res->num_rows > 0) {
            $r = $res->fetch_row();

            $sq = "SELECT id FROM suppliers WHERE supplierName LIKE '%$supp%'";
            $ress = $conn->query($sq);
            if ($ress->num_rows > 0) {
                $rr = $ress->fetch_row();
                $sql = "INSERT INTO delivery(iarno,itemNo,supplier_id,quantity,dateT)
                      VALUES('$iar[$m]','$r[0]','$rr[0]','$quan[$m]','$d[$m]')";

                $conn->query($sql);
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
