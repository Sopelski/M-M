<!DOCTYPE html> 
<html> 
<body> 

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
	<label for="name">Please enter your name: </label> 
	<input name="name" type="text"><br> 
	<label for="email">Please enter your email: </label> 
	<input name="email" type="text"><br> 
	<label for="number">Please enter your pnumber: </label>
	<input name="number" type="text"><br> 
	<input type="submit" value="Submit" name="SubmitForm"> 
	</form> 
<?php
	require("db.php");
	if(isset($_POST['SubmitForm'])){

	$nm=$_POST['name']; 
	$email=$_POST['email']; 
	$number=$_POST['number'];
	echo "<strong>".$nm." is $email years old.</strong>"; 

 




	
	$dbh = connect_db();
	if  (!$dbh) {

	die("Unable to connect to MySQL: " . mysqli_error()); 
	//if connection failed output error message 
	}
	if  (!mysqli_select_db($dbh,'phonebook')) {    
	die("Unable to select database: " . mysql_error()); 
	//if selection fails output error message 
	}
	$sql_stmt = "INSERT INTO `phonebook` (`name`,`email`,`mobile`)";
	$sql_stmt .= " VALUES('$nm','$email','$number')"; 
    
	$result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 
    
	if (!$result) {     
		die("Adding record failed: " . mysqli_error()); 
		//output error message if query execution failed echo "Poseidon has been successfully added to your contacts list";
	}
	 mysqli_close($dbh); //close the database connection 
	}


	$dbh = connect_db();

	if (!$dbh) {
	die("no_connection" . mysql_error());
	}

	if (!mysqli_select_db($dbh,'phonebook')){
		die("unable connect to data base" . mysql_error());
	}
	$sql_stmt ="select * from phonebook";
	$result = mysqli_query($dbh,$sql_stmt);
	if (!$result){
		die("enable to execute query");
	}

	$rows = mysqli_num_rows($result); 

	if($rows){
		while ($row = mysqli_fetch_array($result)){

		
		echo 'ID: ' . $row['id'] . '<br>';         
		echo 'Name: ' . $row['name'] . '<br>';
	}

	}

	mysqli_close($dbh); //close the database connection
 ?>
</body> 
</html> 
