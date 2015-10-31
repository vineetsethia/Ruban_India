<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogweb";


$til =$_POST["title"];

$des =$_POST["desc"];

$ty =$_POST["type"];

$d =$_SESSION["blogger_id"];

$f =$_SESSION["blogger_username"];

$todir = "../img/";
$todir1="../img/";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$s="SELECT * FROM blogger_info where blogger_username='$f'";
$result2=mysqli_query($conn,$s);
$row3 = mysqli_fetch_array($result2);
$rrr=$row3['blogger_is_active'];
$e=strlen($rrr);
if($e<=2)
	{
		header('Location: user1.php');
	}
	else{


$sql="INSERT INTO blog_master (blog_title,blog_desc,blog_category,blogger_id,blog_auther) VALUES ('$til','$des','$ty','$d','$f')";
$result1=mysqli_query($conn,$sql);
$g="SELECT * FROM blog_master ORDER BY blog_id DESC LIMIT 1";
$result=mysqli_query($conn,$g);
$row = mysqli_fetch_array($result); 
$i=$row['blog_id']; 
$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);


$sql = "INSERT INTO blog_details(blog_id,blog_detail_image) VALUES ('$i','$path1')";
if (mysqli_query($conn, $sql)) {
    header('Location: user.php');    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	}
mysqli_close($conn);
?>