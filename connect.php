<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "booklist";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong");
}
?>