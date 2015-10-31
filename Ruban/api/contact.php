<?php

$username=$_POST['name'];
$password=$_POST['email'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
// Selecting Database
$db = mysql_select_db("ruban", $connection);
// SQL query to fetch information of registerd users and finds user match.
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$comment=$_POST["comments"];
$email=$_POST["email"];
$query = mysql_query("insert into contact values('$fname','$lname','$email','$comment')", $connection);

$row = mysql_fetch_array($query); 

header("location: home.php"); // Redirecting To Other Page

mysql_close($connection); // Closing Connection
?>