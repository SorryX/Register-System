<?php

$DBhost = "localhost";
$DBusername = "root";
$DBpassword = "";
$DB = "sorryboi123";

$conn = mysqli_connect($DBhost, $DBusername, $DBpassword, $DB);
if (!$conn) {
echo "Connection Failed";
}

?>