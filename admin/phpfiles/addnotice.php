<?php
// session_start();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="ludo";
include("config.php");

$topic= $_POST['topic'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

// $sql = "INSERT INTO    users   (name,email,) VALUES ('$name') ";
// $sql = "UPDATE  grpchatseen SET seen=1    where toid='$fromid' AND grpid='$grpid'";
// $sql = "UPDATE  messages SET seento=1      where  grpid='$grpid' AND ";

// $sql = "INSERT INTO    users   (name,email,password,course,catagory,securityans) VALUES ('$name' , '$id') ";

$sql="INSERT INTO `notice` (`topic`) VALUES ('$topic')";


$result = $conn->query($sql);
$conn->close();
// echo "hi";

?>