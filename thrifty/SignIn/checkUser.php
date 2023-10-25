
<?php
include ("../dbs.php");

$uname = $_POST["uname"];
$pwd= sha1($_POST["pwd"]);

$sql = "SELECT * FROM thrift_db WHERE uname='$uname' AND pwd='$pwd' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
        $_SESSION['uname']= $uname;
        header('Location:../HomeP/home.php?login=true');
}
    
    else{
        header('Location:logIn.php?login=false');
    }



?>