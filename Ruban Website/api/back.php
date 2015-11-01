<?php
$SmsSid	= $_GET['SmsSid'];
$From = $_GET['From'];
$To = $_GET['To'];
$Date = $_GET['Date'];
$Body = $_GET['Body'];
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("ruban", $connection);
$sql = "INSERT INTO query VALUES ('$SmsSid','$From','$To','$Date','$Body')";
if (mysql_query($sql)) {
 header("Content-Type:text/plain");
echo "your message".$Body."has been recieved";
}
else
	echo "error is there";
?>