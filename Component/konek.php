<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fm";

$conn = mysqli_connect($host, $user, $pass, $db); 

if($conn->connect_error) {
die('Maaf koneksi gagal: ' . $conn->connect_error);
}
?>