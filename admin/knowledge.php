 <?php
 
    if (isset($_POST['name'])){
        
        $connection = mysql_connect("localhost","root","");
    if(!$connection){
        die("Database connection failed: " . mysql_error());
    }
    
     mysql_select_db("ik_rep",$connection);
    
	$name = $_POST["name"];
	$len = strlen($name);

	if($len > 0){
		$category =$_POST["category"];
		$image_url =$_POST["image_url"];
		$description = $_POST["description"];

		$queri ="select contaid from contacts order by contaid desc limit 1";
		$ref = mysql_query($queri, $connection) or die (mysql_error());

		$query = "INSERT INTO categories(catid, name) VALUES(NULL,'$category')";
		mysql_query($query, $connection) or die (mysql_error());
		
		$querry = "INSERT INTO knowledge(kid, kname, kdetails, kimageurl, catid, contrid) VALUES(NULL,'$name','$description','$image_url', (select catid from categories order by catid desc limit 1),(select contrid from contributors order by contrid desc limit 1))";
		
		mysql_query($querry, $connection) or die (mysql_error());
		
		header('Location: confirmation.php');

	}
    }
    
?>
<html>
<head>
<title>Knowledge</title>
    <script>
        function conf_del(){
            
            alert('your file have been deleted');
        }
    </script>
<style type="text/css">


    
</style>
</head>
<body text="#666633" bgcolor="white" >
    
    <?php include '../includes/header.php';?>
    
                <div id="main" style="position:absolute; height:77% ; background:#F0D898"><center>
                    
                    
                  

<form action="" method="POST">
	<font face="arial" size="4">
	<br><br>
	<center>
	<h1>KNOWLEDGE</h1>
	<table>
	<tr>
	<td class="label">Category</td>
	<td class="form"><input type="text" name="category"></td>
	</tr>
	<tr>
	<td class="label">Full Name</td>
	<td class="form"><input type="text" name="name"><br></td>
	<br>
	</tr>
	<tr>
	<td class="label">Image url</td>
	<td class="form"><input type="text" name="image_url"><br /></td>
	</tr>
	<tr>
	<td class="label">Description</td>
	<td class="form"><textarea style="width:200%" rows="10" name="description"></textarea></td>
	</tr>

	</table>
	<br />
	<center><input type = "submit" value="Submit" id="conf"></center>
	</center>
</form>

    
         <?php include '../includes/leftBar.php';?>
                                    
         <?php include '../includes/footer.php';?>


</body>
<html>
