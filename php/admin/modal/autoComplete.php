<?php
/**
 * Created by PhpStorm.
 * User: Yanzky
 * Date: 3/18/2018
 * Time: 8:07 PM
 */

$keyword = strval($_POST['query']);
$search_param = "{$keyword}%";
$conn =new mysqli('localhost', 'root', '' , 'inventory');

$sql = $conn->prepare("SELECT * FROM accounts WHERE username LIKE ?");
$sql->bind_param("s",$search_param);
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $item[] = $row["username"];
    }
    echo json_encode($item);
}
$conn->close();

