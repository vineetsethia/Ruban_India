<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruban";


$til =$_POST["title"];

$des =$_POST["desc"];

$ty =$_POST["type"];

$price =$_POST["price"];

$d =$_SESSION["user_id"];

$f =$_SESSION["username"];

$date=getdate();
$day=$date['mday']."/".$date['mon']."/".$date['year'];

$todir = "../img/";
$todir1="../img/";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);
$sql="INSERT INTO product_details VALUES (NULL,$d,'$til','$des','$ty',$price,'$day','$path1')";
$result1=mysqli_query($conn,$sql);
   header('Location: user.php');    
mysqli_close($conn);
?>