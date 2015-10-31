<?php
session_start();
 ?>
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
	@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

body{    background:url(../img/background.jpg) no-repeat;
  background-size: cover;
  height:100%;
}
</style>
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Indigo</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="user.php">Home</a>
            <a class="mdl-navigation__link" href="post.php">Post</a>
			<a class="mdl-navigation__link" href="profile.php">Login As:<?php echo " ".$_SESSION["blogger_username"]?></a>
			<a class="mdl-navigation__link" href="../html/contact.html">Contact Us</a>
				<a class="mdl-navigation__link" href="control.php">Control Panel</a>
					<a class="mdl-navigation__link" href="Request.php">Requests</a>
			<a class="mdl-navigation__link" href="logout.php">Log Out</a>
			
           
          </nav>
        </div>
      </header>
      
      <main class="mdl-layout__content">
        <div class="page-content">
		<?php 
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


?>
<center><form action="search.php" target="iframe_a" method="post">
<br><br>
<div class="form-group">
  <input type="text" class="form-control" id="key" name="key" placeholder="Enter Search Value">
</div>
<input type="submit" class="btn btn-info" value="Search">
</form></center>

<iframe width="100%" height="300px" src="demo.php" name="iframe_a"></iframe>
<br>
<form action="process.php" method="post">
 <input type="text" id="unactive" name="unactive" placeholder="Enter User Name" value=""> <input type="submit" class="btn btn-info" value="Unactive User">
 <input type="text" id="deleteuser" name="deleteuser" placeholder="Enter User Name" value=""> <input type="submit" class="btn btn-info" value="Delete User">
 <input type="text" id="unactivepost" name="unactivepost" placeholder="Enter Post ID" value=""> <input type="submit" class="btn btn-info" value="Unactive Post">
 <input type="text" id="user" name="user" placeholder="Enter User Name" value=""> 
<input type="text" id="pass" name="pass" placeholder="Enter Password" value="">
<input type="submit" class="btn btn-info" value="Change Password"> <br><br>
<input type="text" id="active" name="active" placeholder="Enter User Name" value=""> <input type="submit" class="btn btn-info" value="Active User">
<input type="text" id="activepost" name="activepost" placeholder="Enter Post ID" value=""> <input type="submit" class="btn btn-info" value="Active Post">

</form>
</div>
</main>
</html>