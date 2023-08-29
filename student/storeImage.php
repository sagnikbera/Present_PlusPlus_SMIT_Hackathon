<?php
$connection = mysqli_connect("localhost", "root", "", "present");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$username = $_POST['username'];

$img = $_POST['image'];
$folderPath = "uploads/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName =  $username.'/1.png';

$file = $folderPath . $fileName;
$user_folder = "uploads/" . $username;

if (!file_exists($user_folder)) {
    mkdir($user_folder, 0777, true);
}

// Move the uploaded image to the user's folder
// move_uploaded_file($image_temp, $user_folder . "/" . $newfilename);

file_put_contents($file, $image_base64);
$sql = "INSERT INTO users (name, image) VALUES ('$username', '$file')";
if (mysqli_query($connection, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);

print_r($fileName);
?>