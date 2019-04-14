<?php
require("db.php");

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
    echo '<a href="/teb/phonebookrecord.php?id=' . $row['id'] . '">6</a><br/>';
}

}

mysqli_close($dbh); //close the database connection 

?>