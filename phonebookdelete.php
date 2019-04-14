<?php
    require("db.php");
    $id=$_GET["id"];
    $dbh = connect_db();

    if (!$dbh) {
    die("no_connection" . mysql_error());
    }

    if (!mysqli_select_db($dbh,'phonebook')){
        die("unable connect to data base" . mysql_error());
    }

    $sql_stmt ="delete from phonebook where id=$id";
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result){
        die("enable to execute query");
    }
    
    mysqli_close($dbh); //close the database connection 
?>