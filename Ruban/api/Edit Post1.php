<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubal";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$id=$_POST['id'];
$title=$_POST['title'];
$desc=$_POST['desc'];
$category=$_POST['type'];
$price=$_POST['price'];
$cdate=$_POST['cdate'];
$sql = "UPDATE product-details SET product_title='$title',product_desc='$desc',product_category='$category',price='$price',,creation_date='$cdate' where product_id=$id";
if (mysqli_query($conn, $sql)) {
    header('Location: user.php');    

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
mysqli_close($conn);
?>