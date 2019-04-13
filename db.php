<?php

$db_server_name= "localhost";
$db_user_name= "phone";
$db_password= "teb2019";


function connect_db(){
    global $db_server_name,$db_user_name,$db_password;
    $db_handle = mysqli_connect($db_server_name, $db_user_name, $db_password);
    return $db_handle;
}
?>