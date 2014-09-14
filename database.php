 <?php
    $connection = mysql_connect("localhost","root","Emmanuel#");
    if(!$connection){
        die("Database connection failed: " . mysql_error());
    }
    
     mysql_select_db("ik_rep",$connection);
    
	$fname = $_POST["fname"];
	$len = strlen($fname);

	if($len > 0){
		$lname =$_POST["lname"];
		$cel =$_POST["cel"];
		$tel =$_POST["tel"];
		$email = $_POST["email"];
		$username = $_POST["username"];

		$query = "INSERT INTO contacts(contaid, cell, tell, email) VALUES(NULL,'$cel','$tel','$email')";
		mysql_query($query, $connection) or die (mysql_error());
		
		
		
		$query = "INSERT INTO contributors(contrid, fname, lname, contaid, username) VALUES(NULL,'$fname','$lname', (select contaid from contacts where email ='$email'),'$username')";
		
		mysql_query($query, $connection) or die (mysql_error());
	
		header('Location: knowledge.php');

	}
?>
<html>
<head>
<title>Book</title>
<style type="text/css">
#form{
background-color: #cccc99;
position: absolute; 
left:15%; width:70%;
top:5%;
height:70%
}
#conf{border:2px solid #666633;
	position: absolute;
	width: 15%;
	height: 8%;
	color:#666633;
	left: 45%
}
</style>
</head>
<body text="#666633" bgcolor="white" >

<div id ="form">

<form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="POST">
	<font face="arial" size="4">
	<br><br>
	<center>
	<h1>Contributor Details</h1>
	<table>
	<tr>
	<td class="label">First Name</td>
	<td class="form"><input type="text" name="fname"></td>
	</tr>
	<tr>
	<td class="label">Last Name</td>
	<td class="form"><input type="text" name="lname"><br></td>
	<br>
	</tr>
	
	<tr>
	<td class="label">Cel </td>
	<td class="form"><input type="text" name="cel"><br /></td>
	</tr>
	<tr>
	<td class="label">Tel </td>
	<td class="form"><input type="text" name="tel"></td>
	</tr>
	<tr>
	<td class="label">Email</td>
	<td class="form"><input type="text" name="email"></td>
	</tr>
	<tr>
	<td class="label">Username</td>
	<td class="form"><input type="text" name="username"></td>
	</tr>
	</table>
	<br />
	<center><input type = "submit" value="Submit" id="conf"></center>
	</center>
</form>
<br><br>
</div>
</body>
</html>
