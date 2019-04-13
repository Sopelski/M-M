<?php 

// Creating an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
					"Ram"=>"Rani", "Salim"=>"Sara", 
                    "Raghav"=>"Ravina","sal"=>"salami");
$name_one ["klucz"] = "cus"; 

// Looping through an array using foreach 
echo "Looping using foreach: <br>"; 
foreach ($name_one as $val => $val_value){ 
	echo "Husband is ".$val." and Wife is ".$val_value."<br>"; 
} 

// Looping through an array using for 
echo "\nLooping using for: <br>  "; 
$keys = array_keys($name_one); 
$round = count($name_one); 

for($i=0; $i < $round; ++$i) { 
	echo $keys[$i] . ' ' . $name_one[$keys[$i]] . "<br>";   
} 
$name_ilosc = count($name_one);
echo   "ilosc elementow w liscie $name_ilosc";
foreach ($name_one as $klucz => $klucz_value){
    echo "klucz is ".$klucz." and zamek is ".$klucz_value."<br>";
}
?> 
