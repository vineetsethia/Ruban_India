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
	    <link rel="stylesheet" href="../css/profilestyle.css">
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Ruban</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="user.php">Home</a>
			<a class="mdl-navigation__link" href="crowdsorcing.php">Crowd Sourcing Solutions</a>
            <a class="mdl-navigation__link" href="post.php">Post</a>
			<a class="mdl-navigation__link" href="profile.php">Login As:<?php echo " ".$_SESSION["username"]?></a>
			<a class="mdl-navigation__link" href="../html/contact.html">Contact Us</a>
			<?php
           if($_SESSION["username"]=='admin')
            echo "<a class=\"mdl-navigation__link\" href=\"control.php\">Control Panel</a>";		   
			?>
			<a class="mdl-navigation__link" href="logout.php">Log Out</a>
			
           
          </nav>
        </div>
      </header>
      <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruban";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	
}
$d=$_SESSION["username"];
$spd="select about,profile_pic from user_info where username='$d'";
	$spd2 = mysqli_query($conn,$spd);
	$row=mysqli_fetch_array($spd2);
    $des=$row['about'];
	$image=$row['profile_pic'];
?>
      <main class="mdl-layout__content">
        <div class="page-content">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="../img/balloon.jpg" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="<?php echo $image; ?>"	alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo "   ".$_SESSION["username"] ?></h1>
            <p><?php echo $des."            " ?>	<form action="edit profile.php" method="post"><input type="submit" class="btn btn-info" class="pull-right" value="Edit Profile" align="right"></form></p>
        </div>
	
    </div>
</div> <!-- /container -->
		<?php 

$username=$_SESSION["username"];
$id=$_SESSION["user_id"];

$dd="img/profile.jpg";
$rt="select * from user_info where user_id='$id' AND username='$username'";
$rt1= mysqli_query($conn,$rt);
$row1=mysqli_fetch_array($rt1);
$e=$row1['username'];
$e1=$row1['email'];
//$e2=$row1['creation_date'];
//$e3=$row1['blogger_end_date'];
	echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


$re="SELECT product_title,product_desc,product_category,price,creation_date,product_image,product_id from product_details where user_id='$id' ORDER BY product_id DESC";
		
		
		$rs = mysqli_query($conn,$re);
while ($row=mysqli_fetch_array($rs))
	{
$p=$row['product_image'];
	$p1=$row['product_title'];
	$p2=$row['product_category'];
	$p3=$row['price'];
	$p4=$row['creation_date'];
	$p5=$row['product_desc'];
	$p6=$row['product_id'];
echo "</table  align=\"center\">";
	echo "</br>";
	echo" <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\"  align=\"center\">";
     echo "<thead>";
      echo"  <tr>";
        
         echo "<th><img src=\"$p\"  height=\"100\" width=\"200\"></th>";
        
      echo"  </tr>";
     echo" </thead>";
    echo"  <tbody>";
       echo"<tr>";
       echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">Title: $p1</td >";
        
       echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Category: $p2</td>";
       echo" </tr>";
	   echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Price: $p3</td>";
       echo" </tr>";
	   echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Created date: $p4</td>";
       echo" </tr>";
       echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Description <a href=\"profile.php\">$p5</a></td>";
          
       echo" </tr>";
     
       echo" <tr>";
        echo "<td><form action=\"Edit Post.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"$p6\"><input type=\"submit\" class=\"btn btn-info\" value=\"Edit Post\"></form></td>";
          
       echo" </tr>";
      echo"</tbody>";
  echo" </table>";


}

		
		?>

		
		
		</div>
      </main>
    </div>
  </body>
</html>