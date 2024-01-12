<?php
$hostname = "localhost";
$username = "root";
$pass = "";
$dbname = "facebook";

$connection = sqli_connect($hostname,$username,$pass,$dbname) or die();
?>