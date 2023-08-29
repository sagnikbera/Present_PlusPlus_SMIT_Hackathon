<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $pass = $_POST["password"];
// echo $email.' '.$password;
    // Perform necessary validation and data sanitization

    // Connect to the database (replace with your database configuration)
include("./config.php");
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check user credentials
    // $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$sql = "SELECT *  FROM `users`  WHERE `email`='$email' AND `password`='$pass'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $p=0;
        while($row = $result->fetch_assoc()) {
            // $userid=$row["userid"];
            
    
            $p=$row["userid"];
        }
    
        // echo json_encode(["success" => true, "name" => "Login successful!"]);
        
        echo $p;
    } else {
        // echo json_encode(["success" => false, "message" => "Invalid credentials"]);
        echo 0;
    }

    $conn->close();
}
?>