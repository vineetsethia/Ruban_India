<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruban";






$f =$_SESSION["username"];

$todir = "../img/";
$todir1="../img/";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);

$about=$_POST['about'];
$sql="Update user_info set about='$about',profile_pic='$path1' where username='$f'";
$result1=mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    header('Location: profile.php');    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>