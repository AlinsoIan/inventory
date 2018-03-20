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


$sql = "INSERT INTO issuance(division,office,responsibility,fpp,ris,sai,dateT,timeT,typeT,status,issuer) 
        VALUES ('$division','$office','$responsibility','$fpp','$ris','$sai','$d','$ti','$t','pending','$s')";

$category = $_POST['category'];
$des = $_POST['des'];
$unit = $_POST['units'];
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
        if(!empty($a)) {
            array_push($dess,$a);
        }
    }
    $u = [];
    foreach ($unit as $a){
        if(!empty($a)) {
            array_push($u,$a);
        }
    }
    $req = [];
    foreach ($qRequested as $a){
        if(!empty($a)) {
            array_push($req,$a);
        }
    }
    $iss = [];
    foreach ($qIssued as $a){
        if(!empty($a)) {
            array_push($iss,$a);
        }
    }
    $rem = [];
    foreach ($remarks as $a){
        if(!empty($a)) {
            array_push($rem,$a);
        }
    }

    $id = mysqli_insert_id($conn);
    for ($m = 0;count($cat) > $m;$m++) {
        $sql = "INSERT INTO itemissuance(category,description,unit,quantityRequested,quantityIssued,remarks,issue_id)
                      VALUES('$cat[$m]','$dess[$m]','$u[$m]','$req[$m]','$iss[$m]','$rem[$m]','$id')";
        if($conn->query($sql))
        {
            $sq = "SELECT startingQuantity,id FROM items WHERE description LIKE '$dess[$m]'";
            $res = $conn->query($sq);
            if($res){
                $r = $res->fetch_row();

                    if($r[0] < $iss[$m]){

                        $sql = "DELETE FROM issuance WHERE issuance.id = '$id'";

                        if($conn->query($sql)){


                            $sql = "DELETE FROM itemissuance WHERE issue_id = '$id'";
                            if($conn->query($sql)){
                                $m="Error! Not enough items on the inventory!";
                                echo "
                                <script type = 'text/javascript'>
                                    alert('$m');
                                    window.location.replace('../../admin/issuance.php');
                                </script>
                                ";
                            }
                        }

                    }else{
                        $n = $r[0] - $iss[$m];
                        $sql = "UPDATE items SET startingQuantity = '$n' WHERE id = '$r[1]'";

                        if($conn->query($sql)){
                            header('Location:../../admin/issuance.php');
                        }else{
                            $m="Error! Updating Item Quantity!";
                            echo "
                                <script type = 'text/javascript'>
                                    alert('$m');
                                    window.location.replace('../../admin/issuance.php');
                                </script>
                                ";
                        }
                    }
            }
        }
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
