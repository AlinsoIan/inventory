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

$sql = "SELECT firstName,lastName,userType,accountID,status FROM accounts WHERE username = ? && password = ?";

$st = $conn->prepare($sql);
$st->bind_param('ss',$user,$pass);
$st->execute();

$res = $st->get_result();
$r = $res->fetch_row();





if($res->num_rows > 0 && $r[4] == 'active'){

    $t = date('h:i:a');
    $d = date('Y:n:j');

    $_SESSION['type'] = $r[2];
    $_SESSION['username'] = $user;
    $_SESSION['full'] = strtoupper($r[1] . " " . $r[0]);
    $_SESSION['user'] = $r[3];

    if($r[2]=="admin") {
        $sql = "INSERT INTO accountlogs(accountID,loginTime,loginDate)
              VALUES ('$r[3]','$t','$d')";
        $conn->query($sql);
        $sql = "SELECT MAX(logID) FROM accountlogs";
        $res = $conn->query($sql);
        $r = $res->fetch_row();
        $_SESSION['logID'] = $r[0];



        header('Location:../admin/dashboard.php');
    }elseif($r[2]=="user"){
        $sql = "INSERT INTO accountlogs(accountID,loginTime,loginDate)
              VALUES ('$r[3]','$t','$d')";
        $conn->query($sql);
        $sql = "SELECT MAX(logID) FROM accountlogs";
        $res = $conn->query($sql);
        $r = $res->fetch_row();
        $_SESSION['logID'] = $r[0];
        header('Location:../user/delivery.php');

    }else{
        $m="Error login, Unknown user type! Contact Administrator";
        echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../index.php');
            </script>
         ";
    }

}else{
    $m = "Wrong Credentials! or account is Disabled";

    echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../index.php');
            </script>
         ";
}

