<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogweb";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$id=$_POST['id'];
$title=$_POST['title'];
$desc=$_POST['desc'];
$category=$_POST['type'];
$sql = "UPDATE blog_master SET blog_title='$title',blog_desc='$desc',blog_category='$category' where blog_id=$id";
if (mysqli_query($conn, $sql)) {
    header('Location: user.php');    

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
mysqli_close($conn);
?>