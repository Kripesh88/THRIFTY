<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "thrift";
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die('Connection Refused');
}
?>
