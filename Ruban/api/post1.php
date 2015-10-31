<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubal";


$til =$_POST["title"];

$des =$_POST["desc"];

$ty =$_POST["type"];

$price =$_POST["price"];

$cdate =$_POST["cdate"];

$img =$_POST["imag"];

$d =$_SESSION["user_id"];

$f =$_SESSION["username"];

$todir = "../img/";
$todir1="../img/";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$s="SELECT * FROM user_info where username='$f'";
$result2=mysqli_query($conn,$s);
$row3 = mysqli_fetch_array($result2);

$g="SELECT * FROM blog_master ORDER BY blog_id DESC LIMIT 1";
$result=mysqli_query($conn,$g);
$row = mysqli_fetch_array($result); 
$i=$row['blog_id']; 
$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);
$sql="INSERT INTO product_details (product_title,product_desc,product_category,product_id,price,cdate) VALUES ('$til','$des','$ty','$d','$f')";
$result1=mysqli_query($conn,$sql);

$sql = "INSERT INTO blog_details(blog_id,blog_detail_image) VALUES ('$i','$path1')";
    header('Location: user.php');    
mysqli_close($conn);
?>