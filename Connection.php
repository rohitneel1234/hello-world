<?php
$servername = "raspdb.c0havldscn4k.us-west-2.rds.amazonaws.com"; //replace it with your database server name
$username = "rasspdbuname";  //replace it with your database username
$password = "einfochips";  //replace it with your database password
$dbname = "raspdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>