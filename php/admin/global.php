<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/14/2018
 * Time: 7:58 PM
 */

function showUnits()
{

    include "db.php";
    $sql = "SELECT unitName FROM units";

    $res = $conn->query($sql);
    $ar = [];

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $ar[] = $row['unitName'];
        }
    }
    foreach ($ar as $item) {
        echo "<option>" . $item . "</option>";
    }


}

