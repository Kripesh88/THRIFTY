<?php
include "../dbs.php";

$FirstName =$_POST["Fname"];
$LastName =$_POST["Lname"];
$Email =$_POST["email"];
$PhoneNo =$_POST["phoneNo"];
$Dob = $_POST["dob"];
$Gender = $_POST["gender"];
$uname = $_POST["uname"];
$pwd= sha1($_POST["pwd"]);


$sql = "INSERT INTO thrift_db (Fname,Lname,email,phoneNo,dob,gender,uname,pwd) VALUES ('$FirstName','$LastName','$Email','$PhoneNo','$Dob','$Gender','$uname','$pwd')" ;
$result = mysqli_query($conn, $sql);
if (!$result){
    die("Operation Failed" . mysqli_error($conn));
}
header('location:../SignIn/logIn.php?sucess=true');
?>