<?php
class Books {
   // Members of class Book
    var $title;
    var $autor;
    var $price;

    function setPrice ($de){
        $this -> price = $de;
    }

    function getPrice(){
        return $this;
    }

    function __construct ($dw,$A){
        $this->title = $dw;
        $this->autor = $A;
    }
}

// Creating three objects of book
$physics = New Books("ksiazka1", "autor1");
$maths = New Books("ksiazka2", "autor2");
$chemistry = New Books("ksiazka3", "autor3");




?>