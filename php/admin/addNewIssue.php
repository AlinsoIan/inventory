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

$division = $_POST['division'];
$responsibility = $_POST['responsibilityCenter'];
$ris = $_POST['ris'];
$office = $_POST['office'];
$fpp = $_POST['fpp'];
$sai = $_POST['sai'];
$d = $_POST['d'];
$t = $_POST['type'];
$s = $_SESSION['user'];


$sql = "INSERT INTO issuance(officeID,risNo,saiNo,issuanceDate,issuanceTime, type, issuer) 
        VALUES ('$division','$office','$responsibility','$fpp','$ris','$sai','$d','$ti','$t','$s')";

$category = $_POST['category'];
$des = $_POST['des'];
$qRequested = $_POST['qRequested'];
$qIssued = $_POST['qIssued'];
$remarks = $_POST['remarks'];

if($conn->query($sql)){
    $cat = [];
    foreach ($category as $a){
        if(!empty($a)) {
            array_push($cat,$a);
        }
    }

    $dess = [];
    foreach ($des as $a){
            array_push($dess,$a);

    }
    $req = [];
    foreach ($qRequested as $a){
            array_push($req,$a);

    }
    $iss = [];
    foreach ($qIssued as $a){
            array_push($iss,$a);

    }
    $rem = [];
    foreach ($remarks as $a){
            array_push($rem,$a);

    }

    $id = mysqli_insert_id($conn);
    for ($m = 0;count($cat) > $m;$m++) {

        $sql = "SELECT id FROM items WHERE description LIKE '%$dess[$m]%'";
        $tt = $conn->query($sql);
        $ttt = $tt->fetch_row();

        $sql = "INSERT INTO itemissuance(issuanceID,category,description,quantityRequested, quantityIssued, remarks)
                      VALUES('$ttt[0]','$req[$m]','$iss[$m]','$rem[$m]','$id')";
        $conn->query($sql);

        $sql = "SELECT startingQuantity FROM inventory WHERE description LIKE '%$des[$m]%'";
        $res = $conn->query($sql);
        $r = $res->fetch_row();

        $n = $r[0] - $iss[$m];

        $sql = "UPDATE inventory SET startingQuantity ='$n' WHERE description LIKE '%$des[$m]%'";

        $conn->query($sql);



        
    }


    header('Location:../../admin/issuance.php');


}else{
    $m = "Error Adding Issuance!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/supplier.php');
            </script>
            ";
}
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

$division = $_POST['division'];
$responsibility = $_POST['responsibilityCenter'];
$ris = $_POST['ris'];
$office = $_POST['office'];
$fpp = $_POST['fpp'];
$sai = $_POST['sai'];
$d = $_POST['d'];
$t = $_POST['type'];
$s = $_SESSION['user'];


$sql = "INSERT INTO issuance(officeID,risNo,saiNo,issuanceDate,issuanceTime, type, issuer) 
        VALUES ('$division','$office','$responsibility','$fpp','$ris','$sai','$d','$ti','$t','$s')";

$category = $_POST['category'];
$des = $_POST['des'];
$qRequested = $_POST['qRequested'];
$qIssued = $_POST['qIssued'];
$remarks = $_POST['remarks'];

if($conn->query($sql)){
    $cat = [];
    foreach ($category as $a){
        if(!empty($a)) {
            array_push($cat,$a);
        }
    }

    $dess = [];
    foreach ($des as $a){
            array_push($dess,$a);

    }
    $req = [];
    foreach ($qRequested as $a){
            array_push($req,$a);

    }
    $iss = [];
    foreach ($qIssued as $a){
            array_push($iss,$a);

    }
    $rem = [];
    foreach ($remarks as $a){
            array_push($rem,$a);

    }

    $id = mysqli_insert_id($conn);
    for ($m = 0;count($cat) > $m;$m++) {

        $sql = "SELECT id FROM items WHERE description LIKE '%$dess[$m]%'";
        $tt = $conn->query($sql);
        $ttt = $tt->fetch_row();

        $sql = "INSERT INTO itemissuance(issuanceID,category,description,quantityRequested, quantityIssued, remarks)
                      VALUES('$ttt[0]','$req[$m]','$iss[$m]','$rem[$m]','$id')";
        $conn->query($sql);

        $sql = "SELECT startingQuantity FROM inventory WHERE description LIKE '%$des[$m]%'";
        $res = $conn->query($sql);
        $r = $res->fetch_row();

        $n = $r[0] - $iss[$m];

        $sql = "UPDATE inventory SET startingQuantity ='$n' WHERE description LIKE '%$des[$m]%'";

        $conn->query($sql);



        
    }


    header('Location:../../admin/issuance.php');


}else{
    $m = "Error Adding Issuance!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/supplier.php');
            </script>
            ";
}
