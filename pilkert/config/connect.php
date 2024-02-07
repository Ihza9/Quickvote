<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$userdb = "root";
$passdb = "";
$namadb = "pilkert";
$url = "http://localhost/evoting/pilkert/";

$conn = mysqli_connect($host, $userdb, $passdb, $namadb);
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }
?>
