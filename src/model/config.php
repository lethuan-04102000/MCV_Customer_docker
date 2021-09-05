<?php 

$server = "db";
$user = "root";
$pass = "mypassword";
$database = "manage_customer";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>