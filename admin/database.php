<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "coffee";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}