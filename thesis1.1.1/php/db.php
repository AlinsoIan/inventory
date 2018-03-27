<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 12/17/2017
 * Time: 11:07 PM
 */
date_default_timezone_set('Asia/Manila');
$conn = new mysqli("localhost","root","","inventory");

if(!$conn){
    echo "Database Error" . $conn->error;
}