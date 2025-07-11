<?php
$con = new mysqli('localhost', 'root', '', 'bootstrapcrud');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
