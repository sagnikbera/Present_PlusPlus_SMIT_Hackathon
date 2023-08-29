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
$catagory= 0;
$secans= $_POST['secans'];
$year= $_POST['year'];
// $imgpath= $_POST['imgpath'];
// $id= $_POST['id'];
// $fel= $_POST['fel'];


$img = $_POST['image'];

$folderPath = "uploads/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName =  $name.'/1.png';

$file = $folderPath . $fileName;
$user_folder = "uploads/" . $name;

if (!file_exists($user_folder)) {
    mkdir($user_folder, 0777, true);
}

// Move the uploaded image to the user's folder
// move_uploaded_file($image_temp, $user_folder . "/" . $newfilename);

file_put_contents($file, $image_base64);

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

$sql="INSERT INTO `users` (`userid`, `name`, `email`, `password`, `course`, `year`, `securityans`, `catagory`, `image`) VALUES (NULL, '$name', '$email', '$pass', '$course', '$year', '$secans', '$catagory', '$file')";


$result = $conn->query($sql);
$conn->close();
// echo "hi";

?>