<?php
// session_start();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="ludo";
include("config.php");

$userid= $_POST['userid'];
$lid= $_POST['lid'];
$n= $_POST['no'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

// $sql = "INSERT INTO    users   (name,email,) VALUES ('$name') ";
// $sql = "UPDATE  grpchatseen SET seen=1    where toid='$fromid' AND grpid='$grpid'";
// $sql = "UPDATE  messages SET seento=1      where  grpid='$grpid' AND ";

// $sql = "INSERT INTO    users   (name,email,password,course,catagory,securityans) VALUES ('$name' , '$id') ";
if($n==3){
    $sql = "UPDATE `lecdata` SET `a3`=1 WHERE  `lid`='$lid' AND `userid`='$userid' ";

}
else{

    $sql="INSERT INTO `lecdata` (`userid`,`lid`,`a1`) VALUES ('$userid','$lid',1)";
}


$result = $conn->query($sql);
$conn->close();
// echo "hi";

?>