<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'john smith';
echo $name;
echo '<br/>';

$has_children = false;
echo 
$has_children;

var_dump($has_children);

echo '<br/>';

$age = 25;
echo $age;


$my_height = 186.7;
var_dump($my_height);

// adding strings to variables

//  using double quotes""

echo '<br/>';
echo "My name is $name and my age is $age with height of $my_height cm.";
echo '<br/>';
 

echo "My name is {$name} and my age is {$age} with height of {$my_height} cm.";


echo '<br/>';
echo '<br/>';


// concertanation incase of single quotes using .
echo 'My name is ' . $name . ' and my age is  ' .$age . ' with height of ' . $my_height . ' cm.';

// Arithmetic operators + - / * %

echo '<br/>';
echo 5+6;

echo '<br/>';
echo 8-6;

echo '<br/>';
echo 7%2;


// constants-cvariables that cannot be changed

define('HOST', 'localhost');

define('USER', 'root');

echo '<br/>';
echo '<br/>';

var_dump (HOST);

echo '<br/>';

var_dump (USER);












// 








