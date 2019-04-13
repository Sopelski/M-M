<?php 
  
// PHP code to check errors 
  
// If file is not present  
// then exit from script 
if( !file_exists("geeks.txt") ) { 
    die("File is not present"); 
} 
  
// If file is present 
// then continue 
else { 
    $file = fopen("geeks.txt", "r"); 
} 
?> 