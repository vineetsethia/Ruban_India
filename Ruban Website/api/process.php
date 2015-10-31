<?php
session_start();

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogweb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$unactiveuser="";
$deleteuser="";
$deletepost="";
$user="";
$password="";
$activeuser="";
$activepost="";

$unactiveuser=$_POST['unactive'];

$deleteuser=$_POST['deleteuser'];

$unactivepost=$_POST['unactivepost'];

$user=$_POST['user'];

$password=$_POST['pass'];

$activeuser=$_POST['active'];

$activepost=$_POST['activepost'];

if($unactiveuser!="")
{
	$sql = "UPDATE blogger_info SET blogger_is_active='no' where blogger_username='$unactiveuser'";
   if (mysqli_query($conn, $sql)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
       mysqli_close($conn);
}
else if($deleteuser!="")
{
		$sql = "DELETE from blogger_info where blogger_username='$deleteuser'";
		  $sqltwo = "DELETE from blogger_master where blogger_username='$deleteuser'";
   if (mysqli_query($conn, $sql) || mysqli_query($conn, $sqltwo)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
       mysqli_close($conn);
}
else if($unactivepost!="")
{
	$sql = "UPDATE blog_details SET blog_is_active='no' where blog_id=$unactivepost";
		  $sqltwo = "UPDATE blog_master SET blog_is_active='no' where blog_id=$unactivepost";
   if (mysqli_query($conn, $sql) || mysqli_query($conn, $sqltwo)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
       mysqli_close($conn);
}
else if($user!="" && $password!="")
{
	$sql = "UPDATE blogger_info SET blogger_password='$password' where blogger_username='$user'";
   if (mysqli_query($conn, $sql)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
	
       mysqli_close($conn);
}
else if($activeuser!="")
{
	$sql = "UPDATE blogger_info SET blogger_is_active='yes' where blogger_username='$activeuser'";
   if (mysqli_query($conn, $sql)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
       mysqli_close($conn);
}
else if($activepost!="")
{
	$sql = "UPDATE blog_details SET blog_is_active='yes' where blog_id=$activepost";
		  $sqltwo = "UPDATE blog_master SET blog_is_active='yes' where blog_id=$activepost";
   if (mysqli_query($conn, $sql) || mysqli_query($conn, $sqltwo)) {
    header('Location: control.php');    

   } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
       mysqli_close($conn);
}

?>
