 <?php
 if(isset($_POST['fname'])){
    /* $connection = mysql_connect("localhost","root","");
    if(!$connection){
        die("Database connection failed: " . mysql_error());
    }
    
     mysql_select_db("ik_rep",$connection);*/
    
	$fname = $_POST["fname"];
	$len = strlen($fname);

	if($len > 0){
		$lname =$_POST["lname"];
		$cel =$_POST["cel"];
		$tel =$_POST["tel"];
		$email = $_POST["email"];
		$username = $_POST["username"];

		$queri = $dbConnection -> query("INSERT INTO contacts(contaid, cell, tell, email) VALUES(NULL,'$cel','$tel','$email')");
		mysql_query($queri, $connection) or die (mysql_error());
		
		
		
		$query = "INSERT INTO contributors(contrid, fname, lname, contaid, username) VALUES(NULL,'$fname','$lname', (select contaid from contacts where email ='$email'),'$username')";
		
		mysql_query($query, $connection) or die (mysql_error());
	
		header('Location: admin_portal.php');

	}
 }
    
?>
<html>
<head>
<title>contributor</title>
<style type="text/css">


</style>
</head>
<body text="#666633" bgcolor="white" >
    
    <div id ="form">
   <?php include '../includes/header.php';?>
    
                <div id="main" style="position:absolute; height:77% ; background:#F0D898"><center>
                    <form action="" method="POST">
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
                    
                   </center></div>
    
         <?php include '../includes/leftBar.php';?>
                                    
         <?php include '../includes/footer.php';?>




</body>
</html>
