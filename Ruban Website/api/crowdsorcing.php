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
	<link rel="stylesheet" href="../css/coverstyle.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

body{    background:url(../img/back.jpg) no-repeat;
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
            <a class="mdl-navigation__link" href="home.php">Home</a>
						<a class="mdl-navigation__link" href="crowdsorcing.php">Crowd Sourcing Solutions</a>
            <a class="mdl-navigation__link" href="../html/login.html">Login</a>
			  <a class="mdl-navigation__link" href="../html/contact.html">Contact us</a>
           
          </nav>
        </div>
      </header>
      
      <main class="mdl-layout__content">
        <div class="page-content">
			<div class="container">
     
	
    </div>
</div> <!-- /container -->
<?php
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("ruban", $connection);
$sql= "select * from query";
$rs= mysql_query($sql);
while ($row=mysql_fetch_array($rs))
	{
	
	$p=$row['sms_id'];
	$p1=$row['from_no'];
	$p2=$row['to_no'];
	//$p3=$row['date'];
	$date=getdate();
$p3=$date['mday']."/".$date['mon']."/".$date['year'];
	$p4=$row['body'];
	 
	echo "</table  align=\"center\">";
	echo "</br>";
	echo" <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\"  align=\"center\">";
       echo"  <tbody>";
       echo"<tr>";
       echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\"><b>Query</b>: $p4</td >";
        
       echo" <tr>";
        echo"  <td class=\"mdl-data-table__cell--non-numeric\"  align=\"center\">Posted Date: $p3</td>";
		echo "<tr><td><form action=\"comment.php\" method=\"post\" class=\"form col-md-12 center-block\">
<div class=\"form-group\">
	            <textarea type=\"text\" name=\"suggestion\" rows=\"5\" placeholder=\"Enter Your Suggestion\" class =\"form-control input-lg ckeditor\" id=\"editor1\" placeholder=\"Description\" required ></textarea>
	  <script type=\"text/javascript\">
	    CKEDITOR.replace('editor1');
	  </script></div>
	  <input type=\"hidden\" name=\"id\" value=\"$p\">
	  <input type=\"submit\" class=\"btn btn-info\" value=\"Suggest\">
</form></td></tr>";
      $sql2= "select * from suggestion,query where suggestion.sms_id=query.sms_id";
     $rs2= mysql_query($sql2);
	if($rs2 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
		while ($row2=mysql_fetch_array($rs2))
	   {
         $r=$row2['username'];
        $r1=$row2['suggestion'];
	//	echo "</table  align=\"center\">";
	//echo "</br>";
	//echo" <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\"  align=\"center\">";
     //  echo"  <tbody>";
       echo"<tr>";
       echo"<td class=\"mdl-data-table__cell--non-numeric\" align=\"center\"><b><u>$r</u></b> : $r1 </td >";
        
       echo" </tr>";
		
 	   }		
		
       echo" </tr>";
	   echo "</tbody>";
	   echo "</table>";
	}
?>
</body>
</html>