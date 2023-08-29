<?php
// session_start();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="ludo";
include("config.php");

$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$course= $_POST['course'];
$catagory= $_POST['catagory'];
$secans= $_POST['secans'];
$year= $_POST['year'];
$imgpath= $_POST['imagepath'];
// $id= $_POST['id'];
// $fel= $_POST['fel'];

// $setdun= $_POST['set'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

// $sql = "INSERT INTO    users   (name,email,) VALUES ('$name') ";
// $sql = "UPDATE  grpchatseen SET seen=1    where toid='$fromid' AND grpid='$grpid'";
// $sql = "UPDATE  messages SET seento=1      where  grpid='$grpid' AND ";

// $sql = "INSERT INTO    users   (name,email,password,course,catagory,securityans) VALUES ('$name' , '$id') ";

$sql="INSERT INTO `users` (`userid`, `name`, `email`, `password`, `course`, `year`, `securityans`, `catagory`, `image`) VALUES (NULL, '$name', '$email', '$pass', '$course', '$year', '$secans', '$catagory', '$imgpath')";


$result = $conn->query($sql);
$conn->close();
// echo "hi";

?>