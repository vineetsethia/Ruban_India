<?php
session_start();
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("ruban", $connection);

$suggestion=$_POST['suggestion'];
$sms_id=$_POST['id'];
$username=$_SESSION['username'];
$sql="select * from user_info where username='$username'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$user_id=$row['user_id'];
$sql2="insert into suggestion values($sms_id,$user_id,'$username','$suggestion',NULL)";
echo $sql2;
$result2=mysql_query($sql2);
if($result2 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
mysql_fetch_array($result2);
	header('Location: crowdsorcing.php');
?>