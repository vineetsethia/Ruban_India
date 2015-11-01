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
	 <link rel="stylesheet" href="../css/coverstyle.css">
		<style>
	@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(../img/back.jpg) no-repeat;
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
          <span class="mdl-layout-title">Ruban&nbsp;&nbsp;&nbsp;</span>
		  
		  
		  <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
		  
		  
		  
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
			<?php if($_SESSION["username"]=='admin')
            echo "<a class=\"mdl-navigation__link\" href=\"Request.php\">Requests</a>";		   
			?>
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
$dbname = "ruban";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$re="SELECT * from product_details";
		$rs = mysqli_query($conn,$re);
		$row=mysqli_fetch_array($rs);
		
$re1="SELECT * from user_info where user_info.user_id=product_details.user_id";
	$rs1=mysqli_query($conn,$re1);
	$row1=mysqli_fetch_array($rs1);
	//echo $re1;

	$p=$row['product_image'];
	$p1=$row['product_title'];
	$p2=$row['product_category'];
	$p3=$row['price'];
	$p4=$row['creation_date'];
	$p5=$row['product_desc'];
	$p6=$row['product_id'];
	$p7=$row1['username'];
	$p8=$row1['email'];
	echo $p1;
	echo $p2;
	echo $p3;echo $p4;
	echo $p5;
	echo $p6;
	echo $p7;
	echo $p8;
	echo "</table  align=\"center\">";
	echo "</br>";
	echo" <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\"  align=\"center\">";
     echo "<thead>";
      echo"  <tr>";
	  echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">Seller Name: </td><td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">$p7</td >";
	  echo"  </tr><tr>";
	  echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">Seller Email: </td><td class=\"mdl-data-table__cell--non-numeric\" align=\"center\"$p8</td >";
	  echo"  <tr></tr>";
	  echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">Product Name: </td> <td><class=\"mdl-data-table__cell--non-numeric\" align=\"center\"$p1</td >";
	  echo"  <tr></tr>";
	  echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">Product Price: </td> <td><class=\"mdl-data-table__cell--non-numeric\" align=\"center\"$p3</td >";
	  ?>
	 </html> 
