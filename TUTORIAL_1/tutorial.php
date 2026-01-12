<?php
$nom = "badr";
$age = 22 ;
$prix_of_pc = 4000.00 ;
$prix_of_mouse = "100";
$is_it_connected = TRUE ;

echo "my name is " . $nom .  "HAMMAM <br>" ;
echo "the age is " . $age .  "but will change in 2026/06/29 <br" ;
echo "the price of my pc is " . $prix_of_pc .  "DH <br" ;
echo "answer Y or n , is the pc strong enought " . ($is_it_connected ? "Y" : "n") . "<br>" ;
$prix_of_mouse_INT = (int)$prix_of_mouse ;
echo "the price of mouse is " . $prix_of_mouse_INT . "DH <br>";
var_dump($nom);
