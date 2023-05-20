<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btb4eg2onlinecertificate';
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset( $conn, 'utf8');
if (!$conn) {
  die('fail connect' . mysqli_connect());
}

?>