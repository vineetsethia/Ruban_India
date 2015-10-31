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
		<style>
		@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
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
            <a class="mdl-navigation__link" href="home.php">Home</a>
            <a class="mdl-navigation__link" href="../html/login.html">Login</a>
            <a class="mdl-navigation__link" href="../html/contact.html">Contact us</a>
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
$dd="img/profile.jpg";
$d1=$_POST['submit'];
$e="select * from blogger_info where blogger_username='$d1'";
$r3 = mysqli_query($conn,$e);
$row1=mysqli_fetch_array($r3);
$e4=$row1['blogger_id'];
$e=$row1['blogger_username'];
$e1=$row1['email'];
$e2=$row1['blogger_creation_date'];
$e3=$row1['blogger_end_date'];

echo "<table border=\"0\" align=\"center\">";
	echo "<tr><th><img src=\"$dd\"  height=\"442\" width=\"642\"></th>";
	echo "<tr><td>";
	echo "Username:". "$e";
	echo "</td><td>";
	echo "<tr><td>";
	echo "E-mail:"."$e1";
	echo "</td></tr>";
    echo "<tr><td>";
	echo "Created On:"."$e2";
	echo "</td></tr>";
	echo "<tr><td>";
	echo "End Date:"."$e3";
	echo "</td></tr>";

	echo "</table>";
	echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

$re="SELECT blog_master.blog_id,blog_title,blog_desc,blog_auther,blog_category,blog_detail_image,creation_date FROM blog_master,blog_details WHERE blog_master.blog_id=blog_details.blog_id and blog_master.blogger_id='$e4'  ORDER BY blog_master.blog_id DESC ";
		
		
		$rs = mysqli_query($conn,$re);
while ($row=mysqli_fetch_array($rs))
	{
$p=$row['blog_detail_image'];
	$p1=$row['blog_auther'];
	$p2=$row['creation_date'];
	$p3=$row['blog_title'];
$p4=$row['blog_desc'];
	echo "</table  align=\"center\">";
	echo "</br>";
	echo" <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\"  align=\"center\">";
     echo "<thead>";
      echo"  <tr>";
        
         echo "<th><img src=\"$p\"  height=\"442\" width=\"642\"></th>";
        
      echo"  </tr>";
     echo" </thead>";
    echo"  <tbody>";
       echo"<tr>";
       echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\">TITLE:$p3</td >";
        
       echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Description: $p4</td>";
       echo" </tr>";
       echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Auther:<a href=\"profile1.php\">$p1</td>";
          
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