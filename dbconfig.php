<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "upload_db";

$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($db->connect_error) {
    die("connect error" . $db->connect_error);
}

?>