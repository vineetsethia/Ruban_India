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

html{    background:url(../img/background.jpg) no-repeat;
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
          <span class="mdl-layout-title">Ruban</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="user.php">Home</a>
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

$re="SELECT product_title,product_desc,product_category,price,creation_date,product_image from product_details ORDER BY product_id DESC";
		
		
		$rs = mysqli_query($conn,$re);
while ($row=mysqli_fetch_array($rs))
	{
	
	$p=$row['product_image'];
	$p1=$row['product_title'];
	$p2=$row['product_category'];
	$p3=$row['price'];
	$p4=$row['creation_date'];
	$p5=$row['product_desc'];
	 
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
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">By: <a href=\"profile.php\">$p5</a></td>";
          
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