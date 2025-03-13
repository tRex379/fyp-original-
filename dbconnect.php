<?php
ob_start();
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "tuition";
$conn = mysqli_connect($host, $user, $password, $database);
?>