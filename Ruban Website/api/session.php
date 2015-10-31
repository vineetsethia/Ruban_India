<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("blogweb", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['blogger_username'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select blogger_username from blogger_info where blogger_username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['blogger_username'];

?>