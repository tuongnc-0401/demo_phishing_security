<?php 

$servername = "sql306.epizy.com";
$dBUsername = "epiz_27631986";
$dBPassword = "BdMSGx1pI7cc";                                 
$dbName = "epiz_27631986_leagueoflegend";

// Create connection
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>