<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogweb";


$username1 =$_POST["username"];
$email =$_POST["email"];
$password1 =$_POST["password"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO blogger_info(email, blogger_username, blogger_password) VALUES ('$email','$username1','$password1')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../html/login1.html');    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>