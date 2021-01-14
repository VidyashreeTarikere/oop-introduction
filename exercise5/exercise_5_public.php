<?php

declare(strict_types=1);
require "Beverage.php";

//Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//USE TYPEHINTING EVERYWHERE!
$cola = new Beverage("black", 2.0);

//print the getInfo on the screen.
echo $cola->getInfo();

//print the temperature on the screen.
echo "<br>";
echo $cola->temperature;
/* EXERCISE 5
Copy the class of exercise 1.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/