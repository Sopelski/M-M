<?php 

// Defining a multidimensional array 
$favorites = array( 
	array( 
		"name" => "Dave Punk", 
		"mob" => "5689741523", 
		"email" => "davepunk@gmail.com", 
	), 
	array( 
		"name" => "Monty Smith", 
		"mob" => "2584369721", 
		"email" => "montysmith@gmail.com", 
	), 
	array( 
		"name" => "John Flinch", 
		"mob" => "9875147536", 
		"email" => "johnflinch@gmail.com", 
    ), 
    array(
        "name" => "Kosma",
        "mob" => "606716969",
        "email"=> "k.bladowsli2012@gmail.com",
            )
); 

// Accessing elements 
echo "Dave Punk email-id is: " . $favorites[0]["email"], "<br>"; 
echo "John Flinch mobile number is: " . $favorites[1]["mob"],"<br>" ; 
echo "Krzysiek second name-id is: " . $favorites[3]["name"], "<br>";

?> 
