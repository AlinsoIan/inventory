<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 12/17/2017
 * Time: 11:06 PM
 */

require 'db.php';


session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT firstName,lastName,userType FROM accounts WHERE username = ? && password = ?";

$st = $conn->prepare($sql);
$st->bind_param('ss',$user,$pass);
$st->execute();

$res = $st->get_result();
$r = $res->fetch_row();

if($res->num_rows > 0){

    $t = date('h:i:a');
    $d = date('Y:n:j');

    $sql = "UPDATE accounts SET loginTime = '$t',loginDate = '$d' WHERE username = '$user'";
    $conn->query($sql);

    $_SESSION['type'] = $r[2];
    $_SESSION['username'] = $user;
    $_SESSION['full'] = strtoupper($r[1] . " " . $r[0]);

    if($r[1]=="admin") {
        header('Location:../admin/dashboard.php');
    }elseif($r[1]=="user"){
        header('Location:../user/addItem.php');

    }else{
        $m="error login";
        echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../index.html');
            </script>
         ";
    }

}else{
    $m = "Wrong Credentials!";

    echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../index.html');
            </script>
         ";
}

